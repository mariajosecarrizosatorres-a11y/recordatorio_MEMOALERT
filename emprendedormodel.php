<?php

namespace App\Models;

use CodeIgniter\Model;

class emprendedor extends Model {
    protected $table = 'emprendedor';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'apellido',
        'telefono',
        'correo'
    ];

    protected $useTimestamps = false;
}