<?php

namespace App\Controllers;

use App\Models\penggunaModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $pengguna = new penggunaModel();        
        $data["dtPengguna"] =$pengguna->findAll();
        return view('pengguna', $data);
    }
}
