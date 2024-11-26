<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function register()
    {
        return view('auth/register');
    }

    public function registerSubmit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nom' => 'required|min_length[2]|max_length[50]',
            'email' => 'required|valid_email|is_unique[User.email]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('auth/register', ['validation' => $validation]);
        }

        $userModel = new UserModel();
        $userModel->save([
            'nom' => $this->request->getPost('nom'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function loginSubmit()
    {
        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set('isLoggedIn', true); // Use 'isLoggedIn' consistently
            $session->set('user', $user);
            return redirect()->to('/dashboard');
        }

        return view('auth/login', ['error' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {  // Use 'isLoggedIn' consistently
            return redirect()->to('/login');
        }

        return view('auth/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        
      return redirect()->to('/login');
    }
    
   
}
