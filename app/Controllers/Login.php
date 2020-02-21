<?php

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController
{
        public function __construct()
        {
                helper(['form', 'url']);
        }

        public function index()
        {
                if ($this->session->get('user') != null) {
                        return redirect()->to('/home');
                }
                return view('auth/login', ['errors' => []]);
        }

        public function auth()
        {
                if ($this->session->get('user') != null) {
                        return redirect()->to('/users');
                }
                $validation =  \Config\Services::validation();

                $requestData = $this->request->getPost();

                if (!$validation->run($requestData, 'signin')) {

                        $errors = $validation->getErrors();

                        return view('auth/login', [
                                'errors' => $errors,
                                'fields' => $this->request->getPost()
                        ]);
                }
                $user = new User();
                try {
                        $userRow = $user->checkLogin(
                                $requestData['email'],
                                $requestData['password']
                        );

                        $this->setSessionUser($userRow);
                        return redirect()->to('/home');
                } catch (\Exception $e) {
                        return view('auth/login', [
                                'errors' => ['error' => $e->getMessage()],
                                'fields' => $this->request->getPost()
                        ]);
                }
        }

        private function setSessionUser(array $userRow)
        {
                $newSessionData = [
                        'id' => $userRow['id'],
                        'email' => $userRow['email'],
                        'person_id' => $userRow['person_id'],
                        'fullname' => $userRow['fullname']
                ];
                $this->session->set(['user' => $newSessionData]);
        }

        public function destroy()
        {
                $this->session->destroy();
                return redirect('login');
        }
}
