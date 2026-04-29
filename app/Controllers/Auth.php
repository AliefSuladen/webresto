<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $model = new UserModel();

        $rules = [
            'name'     => 'required|min_length[3]',
            'email'    => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]',
            'confirm'  => 'required|matches[password]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $model->save([
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user'
        ]);

        return redirect()->to('login')->with('success', 'Registrasi berhasil');
    }

    // BONUS LOGIN BIAR LANGSUNG JALAN
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $model = new \App\Models\UserModel();
        $session = session();

        // validasi input
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email dan password wajib diisi');
        }

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        // cek user
        if (!$user) {
            return redirect()->back()->with('error', 'Email tidak ditemukan');
        }

        // cek password
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah');
        }

        // set session
        $session->set([
            'user_id'   => $user['id'],
            'name'      => $user['name'],
            'role'      => $user['role'],
            'logged_in' => true
        ]);

        // 🔥 redirect berdasarkan role
        if ($user['role'] == 'admin') {
            return redirect()->to('admin/dashboard');
        } else {
            return redirect()->to('/');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
