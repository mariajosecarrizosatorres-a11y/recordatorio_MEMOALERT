<?php

namespace App\Models;

use CodeIgniter\Model;

class cliente extends Model {
    protected $table = 'cliente';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'apellido',
        'telefono',
        'direccion',
        'correo'
    ];

    protected $useTimestamps = false;
}