<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\KategoriModel;


class Kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Kategori',
            'desc' => 'Objek-objek tersebut dikelompokkan menjadi beberapa kategori.'
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'kategori' => $this->kategoriModel->findAll()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataKategori', $data)
            ];
            echo json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(view('Data_master/Action/kategori/v_tambah'));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $this->kategoriModel->insert([
                'kategori' => $this->request->getPost('kategori'),
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
                'kategori' => $this->kategoriModel->find($id)
            ];
            echo json_encode(view('Data_master/Action/kategori/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {

            $this->kategoriModel->update($this->request->getPost('id'), [
                'kategori' => $this->request->getPost('kategori'),
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
            $this->kategoriModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
