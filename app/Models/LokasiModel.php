<?php

namespace App\Models;

use CodeIgniter\Model;

class LokasiModel extends Model
{

    protected $table            = 'lokasi';
    protected $primaryKey       = 'id_lokasi';
    protected $allowedFields    = ['nama_lokasi', 'jenis_lokasi'];
}
