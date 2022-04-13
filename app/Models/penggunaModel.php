<?php 

namespace App\Models;
use CodeIgniter\Model;

class penggunaModel extends Model{
    protected $table        = 'pengguna';
    protected $primaryKey   = 'id';

    protected $useAutoIncrement = 'true';
    protected $allowedFields = [ 'nama','email','password', 'role'];
}