<?php

namespace App\Controllers;

use App\Models\KomentarModel;

class Komentar extends BaseController
{
    public function store()
    {
        $model = new KomentarModel();

        $model->save([
            'user_id'     => session()->get('user_id'),
            'restoran_id' => $this->request->getPost('restoran_id'),
            'komentar'    => $this->request->getPost('komentar'),
            'rating' => $this->request->getPost('rating'),
        ]);

        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan');
    }
}
