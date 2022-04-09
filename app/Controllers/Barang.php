<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    public function index()
    {
        $barang = new BarangModel();
        $dataBarang = $barang->findAll();
        print_r($dataBarang);
        //return view('home');
    }
}
