<?php 

namespace App\Models;
use CodeIgniter\Model;

class mutasiBarangModel extends Model{
    protected $table        = 'mutasiBarang';
    protected $primaryKey   = 'id';

    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['id_barang', 'tanggal', 'jumlah','harga','jenisTransaksi'];
}