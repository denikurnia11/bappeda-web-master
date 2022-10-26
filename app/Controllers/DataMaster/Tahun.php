<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\TahunModel;

class Tahun extends BaseController
{
    protected $tahunModel, $validation;
    public function __construct()
    {
        $this->tahunModel = new TahunModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Tahun',
            'desc' => ''
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'tahun' => $this->tahunModel->findAll()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataTahun', $data)
            ];
            echo json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(view('Data_master/Action/tahun/v_tambah'));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {

            // Validasi
            if (!$this->validate([
                'tahun' => [
                    'rules' => 'is_unique[tahun.tahun]',
                    'errors' => [
                        'is_unique' => 'Tahun sudah tersedia!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        'tahun' => $this->validation->getError('tahun'),
                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->tahunModel->insert([
                    'tahun' => $this->request->getPost('tahun'),
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
                'tahun' => $this->tahunModel->find($id)
            ];
            echo json_encode(view('Data_master/Action/tahun/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            // Cek apakah melakukan perubahan tahun
            $tahunNew = $this->request->getPost('tahun');
            $tahunOld = $this->request->getPost('tahunOld');
            if ($tahunNew === $tahunOld) {
                $rules = 'required';
            } else {
                $rules = 'is_unique[tahun.tahun]';
            }
            // Validasi
            if (!$this->validate([
                'tahun' => [
                    'rules' => $rules,
                    'errors' => [
                        'is_unique' => 'Tahun sudah tersedia!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        'tahun' => $this->validation->getError('tahun')
                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->tahunModel->update($this->request->getPost('id'), [
                    'tahun' => $tahunNew,
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
            $this->tahunModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
