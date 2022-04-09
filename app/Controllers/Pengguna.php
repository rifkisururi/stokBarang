<?php

namespace App\Controllers;

use App\Models\penggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $pengguna = new penggunaModel();
        $dataPengguna = $pengguna->findAll();
        print_r($dataPengguna);
        //return view('home');
    }
}
