<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class TestMailController extends BaseController
{
    public function index()
    {
        $to = 'sample@gmail.com';
        $subject = 'subject ng email to par';
        $message = 'Eto naman ang laman. <br>Nakaset gamit html dito sa App/Config/Email.php';

        $email = Services::email();
        $email->setTo($to);
        $email->setFrom('something@email.com', 'Your Name');

        // BCC - Blind Carbon Copy - sends a copy of the sent email to that account, invisible to the receiver.
        // $email->setBCC('somebcc@email.com');
        // CC - Carbon Copy - sends a copy of the sent email to that account, visible to the receiver.
        // $email->setCC(['somecc@email.com', 'somecc2@email.com']);

        $email->setSubject($subject);
        $email->setMessage($message);
        
        $filepath = 'public\assets\images\page_banner.jpg';
        $email->attach($filepath);
        if($email->send())
        {
            echo "Eyy nagsend sya par";
        }
        else
        {
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }
}
