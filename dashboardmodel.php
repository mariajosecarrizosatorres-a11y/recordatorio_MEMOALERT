<?php

namespace App\Models;

use CodeIgniter\Model;

class dashboard extends Model {
    protected $table = 'dashboard';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'total_cliente',
        'total_pedidos',
        'total_productos',
        'ventas_realizadas',
        'ingresos_totales'
    ];

    protected $useTimestamps = false;
}