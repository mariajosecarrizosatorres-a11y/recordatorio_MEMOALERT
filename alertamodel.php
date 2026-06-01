<?php

namespace App\Models;

use CodeIgniter\Model;

class alerta extends Model {
    protected $table = 'alerta';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'mensaje',
        'tipo',
        'fecha',
        'estado'
    ];

    protected $useTimestamps = false;
}