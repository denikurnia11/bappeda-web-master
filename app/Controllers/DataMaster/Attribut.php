<?php

namespace App\Controllers\DataMaster;

use App\Controllers\BaseController;
use App\Models\AttributModel;


class Attribut extends BaseController
{
    protected $attributModel;
    public function __construct()
    {
        $this->attributModel = new AttributModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Attribut',
            'desc' => 'Attribut merupakan keterangan tambahan dari sebuah datasets.'
        ];
        return view('Data_master/index', $data);
    }

    public function getData()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'attribut' => $this->attributModel->findAll()
            ];
            $msg = [
                'data' => view('Data_master/Data/dataAttribut', $data)
            ];
            echo json_encode($msg);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function tambah()
    {
        if ($this->request->isAJAX()) {
            echo json_encode(view('Data_master/Action/attribut/v_tambah'));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            $this->attributModel->insert([
                'attribut' => $this->request->getPost('attribut'),
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
                'attribut' => $this->attributModel->find($id)
            ];
            echo json_encode(view('Data_master/Action/attribut/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {

            $this->attributModel->update($this->request->getPost('id'), [
                'attribut' => $this->request->getPost('attribut'),
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
            $this->attributModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
