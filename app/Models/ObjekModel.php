<?php

namespace App\Models;

use CodeIgniter\Model;

class ObjekModel extends Model
{

    protected $table            = 'objek';
    protected $primaryKey       = 'id_objek';

    protected $allowedFields    = ['objek', 'id_kategori'];

    function getData()
    {
        return $this->join('kategori', 'objek.id_kategori=kategori.id_kategori')->findAll();
    }
}
