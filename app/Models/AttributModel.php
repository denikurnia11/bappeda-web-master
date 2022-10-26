<?php

namespace App\Models;

use CodeIgniter\Model;

class AttributModel extends Model
{

    protected $table            = 'attribut';
    protected $primaryKey       = 'id_attribut';

    protected $allowedFields    = ['attribut'];
}
