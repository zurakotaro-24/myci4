<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $data = $userModel->getUsersList();
        echo "<pre>";
        print_r($data);
    }

    public function usersList()
    {
        $userModel = new UserModel();
        $data['users'] = $userModel->getUsersList();
        return view('users_list', $data);
    }
}
