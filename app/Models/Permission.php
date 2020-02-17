<?php

namespace App\Models;

use CodeIgniter\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    protected $primaryKey = 'user_id';

    protected $useSoftDeletes = false;

    protected $allowedFields = [];

    protected $useTimestamps = false;

    public function findAllByColumn(String $columName, $value)
    {
        $modules = $this->select('module_id')
                        ->getWhere([$columName => $value])
                        ->getResultArray();

        return $this->convertToSimpleArray($modules);
    }

    private function convertToSimpleArray($modules)
    {
        $newFormat = array();
        for ($i=0; $i < count($modules); $i++) { 
            $newFormat[] = $modules[$i]['module_id'];
        }
        return $newFormat;
    }
}
