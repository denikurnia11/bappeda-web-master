<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AggregateObjectModel;


class Dashboard extends BaseController
{
    protected $aggregateObjectModel;
    public function __construct()
    {
        $this->aggregateObjectModel = new AggregateObjectModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard',
            'desc' => '',
        ];
        return view('v_dashboard', $data);
    }

    public function getData($id)
    {
        $data = [
            // Indeks Pembangunan Manusia Kota Banjarbaru, Prov. Kalsel Dan Indonesia
            'objek' => $this->aggregateObjectModel->getDataById($id),
            // Perbandingan Indeks Pembangunan Manusia Kabupaten / Kota Di Provinsi Kalsel
            // 'ipm2' => $this->aggregateObjectModel->getDataById(65)
        ];
        echo json_encode($data);
    }
}
