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

    public function getAllModules(): array
    {
        $groups = array();
        $this->recursiveModules(null, $groups);
        return $groups;
    }

    private function recursiveModules($module_id, &$groups)
    {
        $groups['sub'] = $this->getWhere(['module_id' => $module_id])->getResultArray();
        foreach ($groups['sub'] as $key => $sub) {
            if ($groups['sub'][$key]['is_base'] == 1) {
                $this->recursiveModules($sub['id'], $groups['sub'][$key]);
            }
        }
    }

}
