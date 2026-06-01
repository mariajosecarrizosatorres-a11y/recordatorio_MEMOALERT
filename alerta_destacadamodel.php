<?php

namespace App\Models;

use CodeIgniter\Model;

class alerta_destacada extends Model {
    protected $table = 'destacada';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_alerta',
        'fecha',
        'motivo'
    ];

    protected $useTimestamps = false;
}