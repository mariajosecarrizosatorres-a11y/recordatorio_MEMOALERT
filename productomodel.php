<?php

namespace App\Models;

use CodeIgniter\Model;

class producto extends Model {
    protected $table = 'producto';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'estado'
    ];

    protected $useTimestamps = false;
}