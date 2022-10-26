<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\BulanModel;


class Bulan extends BaseController
{
    protected $bulanModel, $validation;
    public function __construct()
    {
        $this->bulanModel = new BulanModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Bulan',
            'desc' => 'Tambahkan/Edit deskripsi di file Controllers/DataMaster/Bulan.php'
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'bulan' => $this->bulanModel->findAll()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataBulan', $data)
            ];
            echo json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(view('Data_master/Action/bulan/v_tambah'));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            // Validasi
            if (!$this->validate([
                'bulan' => [
                    'rules' => 'is_unique[bulan.bulan]',
                    'errors' => [
                        'is_unique' => 'Nama Bulan sudah tersedia!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        "bulan" => $this->validation->getError('bulan'),

                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->bulanModel->insert([
                    'bulan' => $this->request->getPost('bulan'),
                    'bulan_singkat' => $this->request->getPost('bulan_singkat'),
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
                'bulan' => $this->bulanModel->find($id)
            ];
            echo json_encode(view('Data_master/Action/bulan/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            // Cek apakah melakukan perubahan tahun
            $bulanNew = $this->request->getPost('bulan');
            $bulanOld = $this->request->getPost('bulanOld');
            if ($bulanNew === $bulanOld) {
                $rules = 'required';
            } else {
                $rules = 'is_unique[bulan.bulan]';
            }
            // Validasi
            if (!$this->validate([
                'bulan' => [
                    'rules' => $rules,
                    'errors' => [
                        'is_unique' => 'Nama Bulan sudah tersedia!',
                    ]
                ]
            ])) {
                $msg = [
                    'err' => [
                        'bulan' => $this->validation->getError('bulan')
                    ]
                ];
                echo json_encode($msg);
            } else {
                $this->bulanModel->update($this->request->getPost('id'), [
                    'bulan' => $bulanNew,
                    'bulan_singkat' => $this->request->getPost('bulan_singkat'),
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
            $this->bulanModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
