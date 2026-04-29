<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModel extends Model
{
    protected $table = 'komentar';

    protected $allowedFields = [
        'user_id',
        'restoran_id',
        'komentar',
        'rating'
    ];

    protected $useTimestamps = true;
}
