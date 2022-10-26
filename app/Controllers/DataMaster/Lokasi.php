<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\LokasiModel;


class Lokasi extends BaseController
{
    protected $lokasiModel;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Lokasi',
            'desc' => 'Data lokasi merupakan kumpulan nama-nama lokasi yang ada di Kalimantan Selatan.'
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'lokasi' => $this->lokasiModel->findAll()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataLokasi', $data)
            ];
            echo json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(view('Data_master/Action/lokasi/v_tambah'));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $this->lokasiModel->insert([
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'jenis_lokasi' => $this->request->getPost('jenis_lokasi'),
            ]);
            echo json_encode(['status' => 'Berhasil disimpan']);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function edit()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $data = [
                'lokasi' => $this->lokasiModel->find($id)
            ];
            echo json_encode(view('Data_master/Action/lokasi/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {

            $this->lokasiModel->update($this->request->getPost('id'), [
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'jenis_lokasi' => $this->request->getPost('jenis_lokasi'),
            ]);
            echo json_encode(['status' => 'Berhasil disimpan']);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function delete()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $this->lokasiModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
