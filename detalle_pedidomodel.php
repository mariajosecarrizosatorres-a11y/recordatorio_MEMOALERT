<?php

namespace App\Models;

use CodeIgniter\Model;

class detalle_pedido extends Model {
    protected $table = 'detalle';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_pedido',
        'id_producto',
        'cantidad',
        'precio'
    ];

    protected $useTimestamps = false;
}