<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RestoranModel;

class Restoran extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new RestoranModel();
    }

    // 📌 LIST DATA
    public function index()
    {
        $data['restoran'] = $this->model->findAll();
        return view('admin/restoran/index', $data);
    }

    // 📌 FORM TAMBAH
    public function create()
    {
        return view('admin/restoran/create');
    }

    // 📌 SIMPAN DATA
    public function store()
    {
        $file = $this->request->getFile('gambar');

        $namaFile = null;

        if ($file && $file->isValid()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/restoran', $namaFile);
        }

        $this->model->save([
            'nama'      => $this->request->getPost('nama'),
            'alamat'    => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar'    => $namaFile
        ]);

        return redirect()->to('restoran')->with('success', 'Data berhasil ditambahkan');
    }

    // 📌 FORM EDIT
    public function edit($id)
    {
        $data['restoran'] = $this->model->find($id);
        return view('admin/restoran/edit', $data);
    }

    // 📌 UPDATE
    public function update($id)
    {
        $data = [
            'nama'      => $this->request->getPost('nama'),
            'alamat'    => $this->request->getPost('alamat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
        ];

        $file = $this->request->getFile('gambar');

        if ($file && $file->isValid()) {
            $namaFile = $file->getRandomName();
            $file->move('uploads/restoran', $namaFile);
            $data['gambar'] = $namaFile;
        }

        $this->model->update($id, $data);

        return redirect()->to('/restoran')->with('success', 'Data berhasil diupdate');
    }

    // 📌 DELETE
    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to('restoran')->with('success', 'Data berhasil dihapus');
    }
}
