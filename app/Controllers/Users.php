<?php

namespace App\Controllers;

use App\Models\GroupModule;
use App\Models\Module;

class Users extends BaseController 
{
    public function __construct()
    {

    }

    public function index()
    {
        
        $module = new Module();
        
        echo "<pre>";
        print_r ($module->getAllModules());
        echo "</pre>";
        
    }

    //--------------------------------------------------------------------

}
