<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class User extends Model
{
    protected $table = 'users';

    protected $useSoftDeletes = true;

    protected $allowedFields = ['username', 'password', 'person_id', 'created_at'];

    protected $useTimestamps = true;

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    public function checkLogin(String $email, String $password)
    {
        $row = $this->where(['email' => $email, 'password' => md5($password)])
                    ->first();

        if ($row == null) {
            throw new Exception("Ingresar credenciales validos", 1);
        }
        return $this->getPersonsDataById($row);
    }

    private function getPersonsDataById(array $data)
    {
        $person = new Person();
        $rowPersona = $person->find($data['person_id']);
        return array_merge(
            $data,
            [
                'fullname' => implode(" ", [$rowPersona['name'], $rowPersona['last_name']])
            ]
        );
    }
}
