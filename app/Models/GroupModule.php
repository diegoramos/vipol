<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupModule extends Model 
{
    protected $table = 'groups_module';

    protected $useSoftDeletes = true;

    protected $allowedFields = ['name'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}
