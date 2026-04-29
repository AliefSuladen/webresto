<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        $restoModel = new \App\Models\RestoranModel();
        $userModel  = new \App\Models\UserModel();
        $komenModel = new \App\Models\KomentarModel();

        $data['total_resto'] = $restoModel->countAll();
        $data['total_user']  = $userModel->countAll();
        $data['total_komen'] = $komenModel->countAll();

        // komentar terbaru
        $data['komentar_terbaru'] = $komenModel
            ->orderBy('created_at', 'DESC')
            ->limit(5)
            ->findAll();

        return view('admin/dashboard', $data);
    }
}
