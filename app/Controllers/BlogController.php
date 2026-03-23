<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\MyParser;

class BlogController extends BaseController
{
    public $parser;
    
    public function __construct()
    {
        $parser = service('parser');

        // Custom Parser - doesn't work.
        // $this->parser = new \App\Libraries\MyParser();

        $this->parser = $parser;
    }

    public function index()
    {
        $data = [
            'page_title' => 'Title ng page', 
            'page_heading' => 'Heading ng page',
            'subjects' => ['HTML', 'CSS', 'Javascript', 'PHP', 'C#', 'Java'],
        ];
        return view('myview', $data);
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
