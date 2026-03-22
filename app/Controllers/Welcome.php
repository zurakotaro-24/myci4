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

    public function greet() 
    {
        return "Welcome to CI4 greet";
    }

    public function test($name, $status) 
    {
        return "Welcome to CI4, $name na isang $status";
    }

    // For remapping, to return to index by default if url is invalid
    public function _remap($method, $param1 = null, $param2 = null) {

        // Using method_exists method.
        if(method_exists($this, $method)) 
        {
            return $this->$method($param1, $param2);
        }
        // Return to index.
        // else 
        // {
        //     return $this->index();
        // }

        // Throw an exception instead of returning to index.
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();

        // Using if else manually.
        // if($method == "test") 
        // {
        //     return $this->$method($param1, $param2);
        // }
        // else if($method == "greet") 
        // {
        //     return $this->$method();
        // }
        // else 
        // {
        //     return $this->index();
        // }
    }


}
