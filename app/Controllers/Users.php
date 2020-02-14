<?php

namespace App\Controllers;

use App\Models\Module;

class Users extends BaseController 
{
    public function __construct()
    {

    }

    public function index()
    {
        $module = new Module();
        $allModules = $module->getAllModules();
        return view('users/permissions', array('allModules' => $allModules['sub']));
    }

    //--------------------------------------------------------------------

}
