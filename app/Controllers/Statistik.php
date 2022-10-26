<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AggregateObjectModel;
use App\Models\AttributModel;
use App\Models\BulanModel;
use App\Models\KategoriModel;
use App\Models\LokasiModel;
use App\Models\ObjekModel;
use App\Models\TahunModel;

class Statistik extends BaseController
{
    protected $aggregateObjectModel, $objekModel, $lokasiModel, $bulanModel, $tahunModel, $attributModel, $kategoriModel;
    public function __construct()
    {
        $this->aggregateObjectModel = new AggregateObjectModel();
        $this->objekModel = new ObjekModel();
        $this->lokasiModel = new LokasiModel();
        $this->bulanModel = new BulanModel();
        $this->tahunModel = new TahunModel();
        $this->attributModel = new AttributModel();
        $this->kategoriModel = new KategoriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Data Statistik',
            'desc' => 'Tambahkan/Edit deskripsi di file Controllers/Statistik.php',
            'objek' => $this->objekModel->getData(),
            'kategori' => $this->kategoriModel->findAll(),
        ];
        return view('Statistik/index', $data);
    }

    public function getDataById($id_objek)
    {
        if ($this->request->isAJAX()) {
            $data = [
                'objek' => $this->objekModel->getData(),
                'aggObj' => $this->aggregateObjectModel->getDataById($id_objek)
            ];
            // $msg = [
            //     'data' => view('Data_master/Data/dataObjek', $data)
            // ];
            return json_encode($data);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function getDataByIdd($id)
    {
        $data = [
            'objek' => $this->aggregateObjectModel->getDataById($id)
        ];

        echo json_encode($data);
    }
    public function getDataByLokasi($id, $lokasi)
    {
        $data = [
            'lokasi' => $this->aggregateObjectModel->getDataByLokasi($id, $lokasi)
        ];
        echo json_encode($data);
    }
    // public function getKategori($id)
    // {
    //     $data = [
    //         'objek' => $this->aggregateObjectModel->getKategori($id)
    //     ];

    //     echo json_encode($data);
    // }

    public function tambah()
    {
        if ($this->request->isAJAX()) {

            $data = [
                'objek' => $this->objekModel->findAll(),
                'lokasi' => $this->lokasiModel->findAll(),
                'bulan' => $this->bulanModel->findAll(),
                'tahun' => $this->tahunModel->findAll(),
                'attribut' => $this->attributModel->findAll(),
                'id_objek' => $this->request->getVar('id_objek')
            ];
            echo json_encode(view('Statistik/v_tambah', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function save()
    {
        if ($this->request->isAJAX()) {
            // Data
            $id_objek = $this->request->getPost('objek');
            $id_lokasi = $this->request->getPost('lokasi');
            $id_bulan = $this->request->getPost('bulan');
            $id_tahun = $this->request->getPost('tahun');
            $id_attribut = $this->request->getPost('attribut');
            $value = $this->request->getPost('value');
            // Jumlah data yang diinput
            $jmlData = count($id_objek);
            // Insert data
            for ($i = 0; $i < $jmlData; $i++) {
                $this->aggregateObjectModel->insert([
                    'id_objek' => $id_objek[$i],
                    'id_lokasi' => $id_lokasi[$i],
                    'id_bulan' => $id_bulan[$i],
                    'id_tahun' => $id_tahun[$i],
                    'id_attribut' => $id_attribut[$i],
                    'value' => $value[$i],
                ]);
            }

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
                'aggObj' =>  $this->aggregateObjectModel->find($id),
                'objek' => $this->objekModel->findAll(),
                'lokasi' => $this->lokasiModel->findAll(),
                'bulan' => $this->bulanModel->findAll(),
                'tahun' => $this->tahunModel->findAll(),
                'attribut' => $this->attributModel->findAll(),
            ];
            echo json_encode(view('Statistik/v_edit', $data));
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {

            $this->aggregateObjectModel->update($this->request->getPost('id'), [
                'id_objek' => $this->request->getPost('objek'),
                'id_lokasi' => $this->request->getPost('lokasi'),
                'id_bulan' => $this->request->getPost('bulan'),
                'id_tahun' => $this->request->getPost('tahun'),
                'id_attribut' => $this->request->getPost('attribut'),
                'value' => $this->request->getPost('value'),
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
            $this->aggregateObjectModel->delete($id);
            echo json_encode(['status' => true]);
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
}
