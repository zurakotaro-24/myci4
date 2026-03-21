<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Welcome extends BaseController
{
    public function index()
    {
        return "Welcome to CI4";
    }

    public function test($name, $status) {
        return "Welcome to CI4, $name na isang $status";
    }
}
