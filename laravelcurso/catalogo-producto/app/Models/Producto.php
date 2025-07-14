<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public static function todos()
    {
        return [
            [
                'nombre' => 'Camisa clasica',
                'precio' => 29.99,
                'descripcion' => 'camisa de algodon para uso diario'
            ],
            [
                'nombre' => 'Pantalon formal',
                'precio' => 49.99,
                'descripcion' => 'Ideal para oficinas o eventos'
            ],
            [
                'nombre' => 'Zapatos de piel',
                'precio' => 199.99,
                'descripcion' => 'Elegante y duraderos'
            ]
        ];
    }
}
