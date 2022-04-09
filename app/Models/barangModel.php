<?php 

namespace App\Model;
use CodeIgniter\Model;

class barangModel extends Model{
    protected $table        = 'barang';
    protected $primaryKey   = 'id';

    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['kode', 'nama'];
}