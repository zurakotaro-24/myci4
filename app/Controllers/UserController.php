<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function __construct()
    {
        helper(['form']);
    }

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

    public function form()
    {
        $data = [];

        if(session()->getFlashdata('validation'))
        {
            $data['validation'] = session()->getFlashdata('validation');
        }

        if(session()->getFlashdata('message'))
        {
            $data['message'] = session()->getFlashdata('message');
        }

        return view('myform', $data);
    }

    public function saveForm()
    {
        // Creating rules without custom message.
        // $rules = [
        //     'username' => 'required', 
        //     'email' => 'required|valid_email', 
        //     'mobile' => 'required|numeric|exact_length[10]',
        // ];

        $rules = [
            'username' => [
                'rules' => 'required', 
                'errors' => [ 
                    'required' => 'Need ng username par',
                ],
            ],
            'email' => [
                'rules' => 'required|valid_email', 
                'errors' => [ 
                    'required' => 'Need ng email par', 
                    'valid_email' => 'Valid email dapat par'
                ],
            ],
            'mobile' => [
                'rules' => 'required|numeric|max_length[10]', 
                'errors' => [ 
                    'required' => 'Need ng mobile number par', 
                    'numeric' => 'Number values lang par, bawal {value}', 
                    'max_length' => 'Gang {param} characters lang par',
                ],
            ], 
        ];

        if($this->request->getMethod() === 'POST')
        {
            if($this->validate($rules))
            {
                return redirect()->to(base_url('/form'))
                                 ->withInput()
                                 ->with('message', 'Saved info successfully.');
            }
            else 
            {
                return redirect()->to(base_url('/form'))
                                 ->withInput()
                                 ->with('validation', $this->validator);
            }
        }
    }
}
