<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\ObjekModel;
use App\Models\KategoriModel;

class Objek extends BaseController
{
    protected $objekModel, $kategoriModel;
    public function __construct()
    {
        $this->objekModel = new ObjekModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Objek',
            'desc' => 'Data Objek adalah judul dari sebuah datasets atau tabel.'
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'objek' => $this->objekModel->getData()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataObjek', $data)
            ];
            return json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


    public function getDataForNav()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'objek' => $this->objekModel->findAll()
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
                'kategori' => $this->kategoriModel->findAll()
            ];
            echo json_encode(view('Data_master/Action/objek/v_tambah', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $this->objekModel->insert([
                'objek' => $this->request->getPost('objek'),
                'id_kategori' => $this->request->getPost('kategori'),
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
                'objek' => $this->objekModel->find($id),
                'kategori' => $this->kategoriModel->findAll()
            ];
            echo json_encode(view('Data_master/Action/objek/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {

            $this->objekModel->update($this->request->getPost('id'), [
                'objek' => $this->request->getPost('objek'),
                'id_kategori' => $this->request->getPost('kategori'),
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
            $this->objekModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
