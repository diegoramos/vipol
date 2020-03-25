<?php

namespace App\Models;

use CodeIgniter\Model;

class AgreementDocumentsCsjo extends Model {

    public $table = 'agreement_documents_csjo';

    protected $useSoftDeletes = true;

    protected $allowedFields = [];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false; 
}