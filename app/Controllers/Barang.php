<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\API\ResponseTrait;

class Barang extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        $barang = new BarangModel();
        $data["dtBarang"] =$barang->findAll();
        return view('barang', $data);
    }

    // buat tambah data via ajax javascript
    public function add()
    {
        $barang = new BarangModel();
        
        // variable yang mau di insert
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');

        $dataPost = [
            'kode' => $kode,
            'nama' => $nama
        ];

        $id = $barang->insert($dataPost);
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

    public function update(){
        $barang = new BarangModel();
        
        // variable yang mau di update
        $kode = $this->request->getPost('kode');
        $nama = $this->request->getPost('nama');
        $id = $this->request->getPost('id');

        $dataPost = [
            'kode' => $kode,
            'nama' => $nama
        ];

        $update = $barang->update( $id , $dataPost);
        if($update == true){
            $output = [
                'id' => $id,
                'pesan' => 'Data berhasi diperbarui'
            ];
        }else{
            $output = [
                'id' => 0,
                'pesan' => 'Data gagal diperbarui'
            ];
        }
        return $this->respond($output, 200);
    }

}
