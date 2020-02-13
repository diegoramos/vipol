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
        $groups = array(); 
        $this->recursiveModules(null,$groups);
        return $groups;
    }

    private function recursiveModules($module_id, &$groups)
    {
        $groups['sub'] = $this->getWhere(['module_id' => $module_id])->getResultArray();
        foreach ($groups['sub'] as $key => $sub) {
            if ($groups['sub'][$key]['is_base']==1) {
                $this->recursiveModules($sub['id'],$groups['sub'][$key]);
            }
        }
    }

    public function getAllModulesRec() : array
    {
        $groups = $this->getWhere(['module_id' => null])->getResultArray();
        
        foreach ($groups as $key => $value) {
            if ($groups[$key]['is_base']==1) {
                $groups[$key]['sub'] = $this->getWhere(['module_id' => $value['id']])->getResultArray();
                foreach ($groups[$key]['sub'] as $keys => $sub) {
                    if ($groups[$key]['sub'][$keys]['is_base']==1) {
                        $groups[$key]['sub'][$keys]['sub']  = $this->getWhere(['module_id' => $sub['id']])->getResultArray();
                        foreach ($groups[$key]['sub'][$keys]['sub'] as $keyss => $subsub) {
                            if ($groups[$key]['sub'][$keys]['sub'][$keyss]['is_base']==1) {
                                $groups[$key]['sub'][$keys]['sub'][$keyss]['sub']  = $this->getWhere(['module_id' => $subsub['id']])->getResultArray();
                            }
                        }
                    }
                }
            }
        }
        return $groups;
    }


}
