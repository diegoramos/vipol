<?php

namespace App\Controllers;

use App\Controllers\Interfaces\IBaseController;
use App\Models\Module;
use App\Models\Permission;
use App\Models\Person;
use App\Models\User;

class Users extends BaseController implements IBaseController
{
    public function __construct()
    {

    }

    public function index()
    {

        $user = new Person();
        $users = $user->select("users.*,persons.name,persons.last_name,persons.dni,persons.address")
            ->join('users', 'users.person_id = persons.id')
            ->paginate(20,'pagina',1);
        
        return view('users/table', array('users'=>$users));
    }

    public function new()
    {
        $module = new Module();
        $allModules = $module->getAllModules();
        return view('users/create', array(
            'allModules' => $allModules['sub']
        ));
    }

    public function create()
    {
        
    }
    
    public function edit($id)
    {
        $module = new Module();
        $persmission = new Permission();
        $myPermission = $persmission->findAllByColumn('user_id',session()->get('user')['id']);
        $allModules = $module->getAllModules();
        
        return view('users/edit', array(
                'allModules' => $allModules['sub'],
                'myPermissions' => $myPermission
            ));
    }

    public function show($id)
    {

    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }


    //--------------------------------------------------------------------

}
