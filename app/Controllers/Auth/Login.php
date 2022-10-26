<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        $data = [
            'validasi' => \Config\Services::validation()
        ];
        return view('Auth/login', $data);
    }

    public function cek()
    {
        if (!$this->validate([
            'username' => [
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Username harus diisi.',
                ]
            ],
            'password' => [
                'rules'  => 'required',
                'errors' => [
                    'required'   => 'Password harus diisi.',
                ]
            ],
        ])) {
            // Redirect
            return redirect()->back()->withInput();
        }

        // Ambil data dari form
        $data = $this->request->getVar();
        // Ambil data user di database yang usernamenya sama 
        $dataUser = $this->userModel->where('username', $data['username'])->first();

        if (!$dataUser) {
            // Jika Username tidak ditemukan, balikkan ke halaman login
            session()->setFlashdata('pesan', 'Username tidak ditemukan');
            // Redirect ke login
            return redirect()->to('/auth/login');
        }
        // Cek password
        // Jika salah arahkan lagi ke halaman login
        if (sha1($data['password']) !== $dataUser['password']) {
            session()->setFlashdata('pesan', 'Password salah');
            // Redirect ke login
            return redirect()->to('/auth/login');
        } else {
            // Jika benar, arahkan user masuk ke aplikasi 
            $sessLogin = [
                'isLogged' => true,
                'idUser' => $dataUser['id_user'],
                'username' => $dataUser['username'],
                'mobile' =>  isset($_GET['mobile']) ? $_GET['mobile'] : "null"
            ];
            session()->set($sessLogin);
            // Otomatis ter-redirect oleh filter
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/auth/login');
    }
}
