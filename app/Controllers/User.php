<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    protected $userModel, $validation;
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data User',
            'desc' => 'Data user digunakan untuk login.'
        ];
        return view('User/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'user' => $this->userModel->findAll()
            ];
            echo json_encode($data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'validation' => $this->validation
            ];
            echo json_encode(view('user/v_tambah', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {

            // Validasi
            if (!$this->validate([
                'username' => [
                    'rules' => 'is_unique[user.username]',
                    'errors' => [
                        'is_unique' => 'Username sudah digunakan!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        'username' => $this->validation->getError('username'),
                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->userModel->insert([
                    'username' => $this->request->getPost('username'),
                    'password' => sha1($this->request->getPost('password')),
                ]);
                echo json_encode(['status' => 'Berhasil disimpan']);
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function edit()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $data = [
                'user' => $this->userModel->find($id),
                'validation' => $this->validation
            ];
            echo json_encode(view('user/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            // Cek apakah melakukan perubahan username
            $usernameNew = $this->request->getPost('username');
            $usernameOld = $this->request->getPost('usernameOld');
            if ($usernameNew === $usernameOld) {
                $rules = 'required';
            } else {
                $rules = 'is_unique[user.username]';
            }
            // Validasi
            if (!$this->validate([
                'username' => [
                    'rules' => $rules,
                    'errors' => [
                        'is_unique' => 'Username sudah digunakan!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        'username' => $this->validation->getError('username')
                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->userModel->update($this->request->getPost('id'), [
                    'username' => $usernameNew,
                    'password' => sha1($this->request->getPost('password')),
                ]);
                echo json_encode(['status' => 'Berhasil disimpan']);
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function delete()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $this->userModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
