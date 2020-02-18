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
            ->where('deleted_at', null)
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
            if (!is_null($this->request->getPost('permissions'))) {
                $permiso = new Permission();
                $permiso->insertBatch(
                    $this->prepareArrayPermission($user->insertID(), $this->request->getPost('permissions'))
                );
            }
        } catch (\Exception $e) {
            return $this->principalUserView('users/create', null, array(
                'errors' => ['error' => $e->getMessage()],
                'fields' => $this->request->getPost()
            ));
        }

        return redirect()->to('/users');
    }

    public function edit($userId)
    {
        $user = new User();
        $userData = $user->find($userId);
        
        $person = new Person();
        $personData = $person->find($userData['person_id']);
        $fields = array(
            'name' => $personData['name'],
            'last_name' => $personData['last_name'],
            'dni' => $personData['dni'],
            'address' => $personData['address'],
            'person_id' => $personData['id'],
            'id' => $userData['id'],
            'email' => $userData['email']
        );
        //fields
        return $this->principalUserView('users/edit', $userId, array(
            'fields' => $fields,
            'user_id' => $userId
        ));
    }

    public function show($id)
    {
    }

    public function update($userId)
    {
        $requestData = $this->request->getPost();
        echo "<pre>";
        print_r ($requestData);
        echo "</pre>";exit;
        $user = new User();
        $userData = $user->find($userId);

        if ($userData == null) {
            return redirect()->to('/users/' . $userId . '/edit');
        } else {
            $requestData['person_id'] = $userData['person_id'];
            $userDataNew = $this->_getRequestUserData($requestData, array(
                "id" => $userId
            ));

            if ($userDataNew['password'] == '') {
                unset($userDataNew['password']);
            }
            $user->save($userDataNew);

            $person = new Person();
            $personDataNew = $this->_getRequestPersonData($requestData, array(
                "id" => $userData['person_id']
            ));
            $person->save($personDataNew);

            $permiso = new Permission();
            $permiso->delete($userId);

            if (!is_null($this->request->getPost('permissions'))) {
                $permiso->insertBatch(
                    $this->prepareArrayPermission($userId, $this->request->getPost('permissions'))
                );
            }
            return redirect()->to('/users');
        }
    }

    public function delete($userId)
    {
        $user = new User();

        if ($user->delete($userId)) {
            return redirect()->to('/users');
        }
        return redirect()->back()->with('foo', 'message');
    }

    private function prepareArrayPermission($userId, $permissions): array
    {
        $arrayPermission = array();
        foreach ($permissions as $key => $moduleId) {
            $arrayPermission[] = array(
                'module_id' => $moduleId,
                'user_id' => $userId,
            );
        }
        return $arrayPermission;
    }

    private function _getRequestUserData($requestData, $mergeData = array(), $except = array())
    {
        return array_diff_key(
            array_merge(
                array(
                    'email' => $requestData['email'],
                    'password' => $requestData['password'],
                    'person_id' => $requestData['person_id']
                ),
                $mergeData
            ),
            $except
        );
    }

    private function _getRequestPersonData($requestData, $mergeData = array(), $except = array())
    {
        return array_diff_key(
            array_merge(
                array(
                    'name' => $requestData['name'],
                    'last_name' => $requestData['last_name'],
                    'dni' => $requestData['dni'],
                    'address' => $requestData['address'],
                ),
                $mergeData
            ),
            $except
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
