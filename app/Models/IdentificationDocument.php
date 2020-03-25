<?php

namespace App\Models;

use CodeIgniter\Model;

class IdentificationDocument extends Model
{

    public $table = 'identification_document';

    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
