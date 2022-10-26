<?php

namespace App\Models;

use CodeIgniter\Model;

class AggregateObjectModel extends Model
{

    protected $table            = 'aggregateobject';
    protected $primaryKey       = 'id_aggregateObject';

    protected $allowedFields    = ['id_objek', 'id_lokasi', 'id_bulan', 'id_tahun', 'id_attribut', 'value'];

    function getData()
    {
        return $this->join('objek', 'aggregateobject.id_objek = objek.id_objek')->join('lokasi', 'aggregateobject.id_lokasi = lokasi.id_lokasi')->join('bulan', 'aggregateobject.id_bulan = bulan.id_bulan')->join('tahun', 'aggregateobject.id_tahun = tahun.id_tahun')->join('attribut', 'aggregateobject.id_attribut = attribut.id_attribut')->findAll();
    }
    function getDataById($id_objek)
    {
        return $this->where(['aggregateobject.id_objek' => $id_objek])->join('objek', 'aggregateobject.id_objek = objek.id_objek')->join('lokasi', 'aggregateobject.id_lokasi = lokasi.id_lokasi')->join('bulan', 'aggregateobject.id_bulan = bulan.id_bulan')->join('tahun', 'aggregateobject.id_tahun = tahun.id_tahun')->join('attribut', 'aggregateobject.id_attribut = attribut.id_attribut')->findAll();
    }
    function getKategori($id_objek)
    {
        return $this->select('kategori')->where(['aggregateobject.id_objek' => $id_objek])->join('objek', 'aggregateobject.id_objek = objek.id_objek')->first();
    }
    function getDataByLokasi($id, $lokasi)
    {
        return $this->where(['aggregateobject.id_objek' => $id])->where(['nama_lokasi' => $lokasi])->join('objek', 'aggregateobject.id_objek = objek.id_objek')->join('lokasi', 'aggregateobject.id_lokasi = lokasi.id_lokasi')->join('bulan', 'aggregateobject.id_bulan = bulan.id_bulan')->join('tahun', 'aggregateobject.id_tahun = tahun.id_tahun')->join('attribut', 'aggregateobject.id_attribut = attribut.id_attribut')->findAll();
    }
}
