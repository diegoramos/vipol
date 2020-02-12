<?php

namespace App\Models;

use CodeIgniter\Model;

class Person extends Model 
{
    protected $table = 'persons';

    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'last_name', 'dni', 'address'];

    protected $useTimestamps = false;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
