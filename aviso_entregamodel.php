<?php

namespace App\Models;

use CodeIgniter\Model;

class aviso_entrega extends Model {
    protected $table = 'aviso';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_entrega',
        'mensaje',
        'fecha',
        'estado'
    ];

    protected $useTimestamps = false;
}