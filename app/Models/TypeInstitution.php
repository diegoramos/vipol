<?php

namespace App\Models;

use CodeIgniter\Model;

class TypeInstitution extends Model
{

    public $table = 'type_institution';

    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
