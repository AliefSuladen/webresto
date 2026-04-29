<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = new \App\Models\RestoranModel();
        $keyword = $this->request->getGet('keyword');

        if ($keyword) {
            $data['restoran'] = $model
                ->like('nama', $keyword)
                ->orLike('alamat', $keyword)
                ->findAll();
        } else {
            $data['restoran'] = $model->getWithRating();
        }

        return view('Home/home', $data);
    }

    public function detail($id)
    {
        $restoModel = new \App\Models\RestoranModel();
        $komenModel = new \App\Models\KomentarModel();

        $data['restoran'] = $restoModel->getDetailWithRating($id);

        $data['komentar'] = $komenModel
            ->where('restoran_id', $id)
            ->orderBy('id', 'DESC')
            ->findAll();

        return view('Home/detail', $data);
    }
}
