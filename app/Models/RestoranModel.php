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
}
