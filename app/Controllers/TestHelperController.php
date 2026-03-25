<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TestHelperController extends BaseController
{
    public function index()
    {
        helper(['form', 'html', 'cookie']);

    }
}
