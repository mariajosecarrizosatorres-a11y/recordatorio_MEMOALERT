<?php

namespace App\Models;

use CodeIgniter\Model;

class entrega extends Model {
     protected $table = 'entrega';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'id_entrega',
        'id_pedido',
        'direccion',
        'fecha_entrega',
        'hora_entrega',
        'estado'
    ];

     protected $useTimestamps = false;
     
}