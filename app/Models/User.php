<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model 
{
    protected $table = 'users';

    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'password', 'person_id', 'created_at'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}