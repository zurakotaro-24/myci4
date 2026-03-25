<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TestHelperController extends BaseController
{
    public function index()
    {
        helper(['form', 'html', 'cookie', 'array']);

        $result = getRandom([10, 20, 30, 45, 67]);

        echo '<pre>';
        print_r($result);
        echo '</pre>';

        echo randomString();

        // echo form_open();
        // echo form_input('username', 'gophp'); 

        // echo base_url();
        // echo current_url();
    }
}
