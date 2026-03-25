<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    // Fields allowed for insert/update.
    protected $allowedFields    = ['name', 'address', 'email', 'mobile', 'username', 'password'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates - can be used to allow the CodeIgniter to create default datetime formats.
    // Irrelevant if column in database is already DEFAULT with CURRENT_TIMESTAMP.
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Functions
    public function getData() 
    {
        $subjects = [
            ['subject' => 'HTML', 'abbr' => 'Hyper Text Markup Language'],
            ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheet'],
            ['subject' => 'JSON', 'abbr' => 'JavaScript Object Notation'],
            ['subject' => 'PHP', 'abbr' => 'Hypertext Preprocessor'],
        ];

        return $subjects;
    }

    public function getUsersList() 
    {
        $db = Database::connect();
        $builder = $db->table('users');

        $result = $builder
            ->select('id, name, address, email, mobile')
            ->get()
            ->getResult();

        if(count($result) > 0)
        {
            return $result;
        }
        else 
        {
            return false;
        }
    }
}
