<?php

namespace App\Controllers;

use App\Models\penggunaModel;
use CodeIgniter\API\ResponseTrait;

class Pengguna extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $pengguna = new penggunaModel();        
        $data["dtPengguna"] =$pengguna->findAll();
        return view('pengguna', $data);
    }

    // buat tambah data via ajax javascript
    public function add()
    {
        $pengguna = new penggunaModel();
        
        // variable yang mau di insert
        $email = $this->request->getPost('email');
        $role = $this->request->getPost('role');
        $nama = $this->request->getPost('nama');

        $dataPost = [
            'email' => $email,
            'nama' => $nama,
            'role' => $role
        ];

        $id = $pengguna->insert($dataPost);
        if($id > 0){
            $output = [
                'id' => $id,
                'pesan' => 'Data berhasi disimpan'
            ];
        }else{
            $output = [
                'id' => 0,
                'pesan' => 'Data gagal disimpan'
            ];
        }
        return $this->respond($output, 200);
    }
}
