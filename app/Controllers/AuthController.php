<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\UserModel;
<<<<<<< HEAD
use App\Models\DiskonModel;
=======
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869

class AuthController extends BaseController
{
    protected $user;

    function __construct()
    {
        helper('form');
        $this->user = new UserModel();
    }

    public function login()
{
    if ($this->request->getPost()) {
        $rules = [
            'username' => 'required|min_length[6]',
            'password' => 'required|min_length[7]|numeric',
        ];

        if ($this->validate($rules)) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $dataUser = $this->user->where(['username' => $username])->first(); //pasw 1234567

            if ($dataUser) {
                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'username' => $dataUser['username'],
                        'role' => $dataUser['role'],
                        'isLoggedIn' => TRUE
                    ]);

<<<<<<< HEAD
// 🔽 Tambahkan bagian ini untuk ambil diskon hari ini
                    $diskonModel = new DiskonModel();
                    $diskonHariIni = $diskonModel->where('tanggal', date('Y-m-d'))->first();
                    if ($diskonHariIni) {
                        session()->set('diskon_nominal', $diskonHariIni['nominal']);
                    }

=======
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
                    return redirect()->to(base_url('/'));
                } else {
                    session()->setFlashdata('failed', 'Kombinasi Username & Password Salah');
                    return redirect()->back();
                }
            } else {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', $this->validator->listErrors());
            return redirect()->back();
        }
    }

    return view('v_login');
}

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
