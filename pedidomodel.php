<?php

namespace App\Models;

use CodeIgniter\Model;

class pedido extends Model {
    protected $table = 'pedido';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_cliente',
        'fecha',
        'total'
    ];

    protected $useTimestamps = false;
}