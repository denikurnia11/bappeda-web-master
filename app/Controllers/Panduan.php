<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Panduan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Panduan',
            'desc' => 'Tambahkan/Edit deskripsi di file Controllers/DataMaster/User.php'
        ];
        return view('v_panduan', $data);
    }
}
