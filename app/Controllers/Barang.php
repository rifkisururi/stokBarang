<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        $barang = new BarangModel();
        $data["dtBarang"] =$barang->findAll();
        return view('barang', $data);
    }
}
