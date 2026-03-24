<?php 

namespace App\Libraries;

use Config\Database;

class TestLibrary 
{
    public $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getData() 
    {
        return $this->db->query('SELECT * FROM users')->getResultArray();
    }

    public function displayData()
    {
        return 'Displaying data';
    }
}