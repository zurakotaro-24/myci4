<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\MyParser;
use App\Libraries\UploadImage;
use App\Models\BlogModel;

class BlogController extends BaseController
{
    public $parser;
    
    public function __construct()
    {
        helper(['form', 'alert']);
        $parser = service('parser');

        // Custom Parser - doesn't work.
        // $this->parser = new \App\Libraries\MyParser();

        $this->parser = $parser;
    }

    public function index()
    {
        // $data = [
        //     'page_title' => 'Title ng page', 
        //     'page_heading' => 'Heading ng page',
        //     'subjects' => ['HTML', 'CSS', 'Javascript', 'PHP', 'C#', 'Java'],
        // ];
        // return view('myview', $data);
        $blogModel = new BlogModel();
        $data['blogs'] = $blogModel->getBlogsWithAuthors();
    
        return view('blogs/index', $data);
    }

    public function show($id)
    {
        $blogModel = new BlogModel();
        $data['blog'] = $blogModel->getSpecificBlog($id);

        return view('blogs/show', $data);
    }

    public function create()
    {
        $data = [];

        if(session()->getFlashdata('validation'))
        {
            $data['validation'] = session()->getFlashData('validation');
        }
        
        return view('blogs/create', $data);
    }

    public function insert()
    {

        $rules = [
            'title' => [
                'rules' => 'required|min_length[5]', 
                'errors' => [
                    'required' => 'The title is needed for the blog.', 
                    'min_length' => 'The title should be at least {param} characters',
                ],
            ], 
            'content' => [
                'rules' => 'required|min_length[5]', 
                'errors' => [
                    'required' => 'The content is needed for the blog.', 
                    'min_length' => 'The content should be at least {param} characters',
                ],
            ],
            'image' => [
                'rules' => 'uploaded[image]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]', 
                'errors' => [
                    'uploaded' => 'Image is required for the blog', 
                    'is_image' => 'The uploaded file should be an image', 
                    'mime_in' => 'The file should be in jpg/jpeg or png format',
                ],
            ],
        ];

        if($this->request->getMethod() === "POST")
        {
            if(!$this->validate($rules))
            {
                return redirect()
                            ->to(base_url('/blogs/create'))
                            ->withInput();
            }

            $file = $this->request->getFile('image');

            $uploader = new UploadImage('blogs');
            $uploadPath = $uploader->upload($file);

            if(!$uploadPath)
            {
                return redirect()
                            ->to(base_url('/blogs/create'))
                            ->withInput();
            }

            $blogModel = new BlogModel();
            $blogModel->save([
                'user_id' => session()->get('user_id'), 
                'title' => strip_tags($this->request->getPost('title')), 
                'content' => $this->request->getPost('content'),
                'image' => $uploadPath,
            ]);
            
            return redirect()->to(base_url('blogs'));
        }
    }

    public function viewFilters() 
    {
        $data = [
            'page_title' => 'My Blog Title', 
            'page_heading' => 'My Blog Heading',
            'date' => '25-05-2022',
            'price' => '561',
            'offer' => '10.63',
            'phone' => '09123456789',
        ];

        return $this->parser->setData($data)->render('filterview');
    }
}
