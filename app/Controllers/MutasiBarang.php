<?php

namespace App\Controllers;

use App\Models\mutasiBarangModel;

class MutasiBarang extends BaseController
{
    public function index()
    {
        $mutasi = new mutasiBarangModel();
        $dataMutasi = $mutasi->findAll();
        print_r($dataMutasi);
        //return view('home');
    }
}
