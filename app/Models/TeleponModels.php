<?php

namespace App\Models;

use CodeIgniter\Model;

class TeleponModels extends Model
{
    protected $table = 'new_telepon';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama', 'nomor'
    ];
    protected $returnType = 'App\Entities\Telepon';
    protected $useTimesatmps = false;
}
