<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunModel extends Model
{

    protected $table            = 'tahun';
    protected $primaryKey       = 'id_tahun';

    protected $allowedFields    = ['tahun'];
}
