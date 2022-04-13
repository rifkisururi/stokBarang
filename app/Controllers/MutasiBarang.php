<?php

namespace App\Controllers;

use App\Models\mutasiBarangModel;

class MutasiBarang extends BaseController
{
    public function index()
    {
        $mutasi = new mutasiBarangModel();
        $data["dtMutasi"] =$mutasi->findAll();
        return view('mutasi', $data);
    }
}
