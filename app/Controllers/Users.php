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
            ->paginate(20, 'pagina', 1);

        return view('users/table', array('users' => $users));
    }

    public function new()
    {
        return $this->principalUserView('users/create', null);
    }

    public function create()
    {

        $requestData = $this->request->getPost();
        $validation =  \Config\Services::validation();

        if (!$validation->run($requestData, 'signup')) {

            $errors = $validation->getErrors();
            return $this->principalUserView('users/create', null, array(
                'errors' => $errors,
                'fields' => $this->request->getPost()
            ));
        }

        $person = new Person();
        $user = new User();

        try {
            $person->save($this->_getRequestPersonData($requestData));
            $requestData['person_id'] = $person->insertID();
            $user->save($this->_getRequestUserData($requestData));
        } catch (\Exception $e) {
            return $this->principalUserView('users/create', null, array(
                'errors' => ['error' => $e->getMessage()],
                'fields' => $this->request->getPost()
            ));
        }

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userId = session()->get('user')['id'];

        return $this->principalUserView('users/edit', $userId);
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
    
    private function _getRequestUserData($requestData)
    {
        return array(
            'email' => $requestData['email'],
            'password' => $requestData['password'],
            'person_id' => $requestData['person_id'],
        );
    }

    private function _getRequestPersonData($requestData)
    {
        return array(
            'name' => $requestData['name'],
            'last_name' => $requestData['last_name'],
            'dni' => $requestData['dni'],
            'address' => $requestData['address'],
        );
    }

    private function principalUserView($viewPath, $userId, $params = array())
    {
        $module = new Module();
        $persmission = new Permission();
        $myPermission = $persmission->findAllByColumn('user_id', $userId);
        $allModules = $module->getAllModules();
        $params = array_merge(
            array(
                'allModules' => $allModules['sub'],
                'myPermissions' => $myPermission
            ),
            $params
        );
        return view($viewPath, $params);
    }


    //--------------------------------------------------------------------

}
