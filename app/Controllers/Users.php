<?php

namespace App\Controllers;

use App\Models\User;
use Exception;

class Users extends BaseController
{
    public function index()
    {
        $user = new User();
        if ($user != null) {
            throw new Exception("Ocurrio un error interno", 1);
        }
        var_dump($user->find(1));
        exit;
        return view('welcome_message');
    }

    //--------------------------------------------------------------------

}
