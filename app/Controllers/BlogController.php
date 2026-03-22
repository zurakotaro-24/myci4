<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BlogController extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Title ng page', 
            'page_heading' => 'Heading ng page',
            'subjects' => ['HTML', 'CSS', 'Javascript', 'PHP', 'C#', 'Java'],
        ];
        return view('myview', $data);
    }
}
