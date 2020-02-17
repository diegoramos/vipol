<?php

namespace App\Controllers;

use App\Models\Module;
use App\Models\Permission;

class Users extends BaseController 
{
    public function __construct()
    {

    }

    public function index()
    {
        $module = new Module();
        $persmission = new Permission();
        $myPermission = $persmission->findAllByColumn('user_id',session()->get('user')['id']);
        $allModules = $module->getAllModules();
        
        echo view('templates/header');
        echo view('templates/sidebar');
        echo view('users/permissions', array(
                'allModules' => $allModules['sub'],
                'myPermissions' => $myPermission
            ));
        echo view('templates/footer');
    }

    //--------------------------------------------------------------------

}
