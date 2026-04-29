<?php

namespace App\Models;

use CodeIgniter\Model;

class RestoranModel extends Model
{
    protected $table = 'restoran';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama',
        'alamat',
        'deskripsi',
        'gambar'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getWithRating()
    {
        return $this->select('restoran.*, 
            COUNT(komentar.id) as total_review,
            AVG(komentar.rating) as rata_rating')
            ->join('komentar', 'komentar.restoran_id = restoran.id', 'left')
            ->groupBy('restoran.id')
            ->orderBy('rata_rating', 'DESC') // 🔥 INI PENTING
            ->findAll();
    }

    public function getDetailWithRating($id)
    {
        return $this->select('restoran.*, 
            COUNT(komentar.id) as total_review,
            AVG(komentar.rating) as rata_rating')
            ->join('komentar', 'komentar.restoran_id = restoran.id', 'left')
            ->where('restoran.id', $id)
            ->groupBy('restoran.id')
            ->first();
    }
}
