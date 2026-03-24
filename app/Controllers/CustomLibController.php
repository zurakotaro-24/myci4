<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Libraries\TestLibrary;

class CustomLibController extends BaseController
{
    public $tl;
    public function __construct()
    {
        $this->tl = new TestLibrary();
    }

    public function index()
    {
        $data = $this->tl->getData();
        echo "<pre>"; 
        print_r($data);
    }
}
