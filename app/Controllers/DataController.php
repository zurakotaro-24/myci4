<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\View\Table;

class DataController extends BaseController
{
    public function index()
    {
        $table = new Table();
        $data = [
            ['Name', 'City', 'State'], 
            ['Fred', 'Hyderabrad', 'TS'], 
            ['Mary', 'Kolkata', 'WB'], 
            ['John', 'Mumbai', 'MH'], 
        ];
        echo $table->generate($data);
    }
}
