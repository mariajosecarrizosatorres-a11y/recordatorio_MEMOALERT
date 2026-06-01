<?php

namespace App\Models;

use CodeIgniter\Model;

class venta extends Model {
    protected $table = 'venta';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_pedido',
        'fecha',
        'total',
        'metodo_pago',
        'estado'
    ];

    protected $useTimestamps = false;
}