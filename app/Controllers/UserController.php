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

    public function registerForm()
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

        return view('register', $data);
    }

    public function registerAcc()
    {
        $rules = [
            'username' => [
                'rules' => 'required', 
                'errors' => [ 
                    'required' => 'Need ng username par',
                ],
            ],
            'password' => [
                'rules' => 'required', 
                'errors' => [
                    'required' => 'Password is required par'
                ],
            ],
            'name' => [
                'rules' => 'required|min_length[3]', 
                'errors' => [
                    'required' => 'Need ng pangalan',
                    'min_length' => 'Should be at least 3 characters.',
                ],
            ],
            'address' => [
                'rules' => 'required', 
                'errors' => [
                    'required' => 'Need ng address par',
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
            if(!$this->validate($rules))
            {
                return redirect()->back()
                                 ->withInput()
                                 ->with('validation', $this->validator);
            }

            $userModel = new UserModel();
            $userModel->save([
                'username' => $this->request->getPost('username'), 
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), 
                'name' => $this->request->getPost('name'), 
                'address' => $this->request->getPost('address'),
                'email' => $this->request->getPost('email'), 
                'mobile' => $this->request->getPost('mobile'), 
            ]);

            return redirect()->to('users');
        }
    }
}
