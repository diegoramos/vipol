<?php

namespace App\Models;

use CodeIgniter\Model;

class Module extends Model 
{
    protected $table = 'modules';

    protected $useSoftDeletes = true;

    protected $allowedFields = ['name', 'icons', 'module_id', 'module_group_id'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function getAllModules() : array
    {
        $groupModule = new GroupModule();
        $groups = $groupModule->findAll();
        foreach ($groups as $key => $group) {
            $groups[$key]['modules'] = $this->getWhere(['module_group_id' => $group['id']])->getResultArray();
        }
        return $groups;
        
    }
}
