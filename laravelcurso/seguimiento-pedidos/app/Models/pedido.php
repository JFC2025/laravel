<?php

namespace App\Models;

class Pedido
{
    public static function todos()
    {
        return 
            [
    ['id' => 1, 'cliente' => 'Ana', 'producto' => 'Laptop', 'estado' => 'Pendiente', 'fecha' => '2025-07-01'],
        ['id' => 2, 'cliente' => 'Luis', 'producto' => 'Tablet', 'estado' => 'Enviado', 'fecha' => '2025-07-02'],
        ['id' => 3, 'cliente' => 'María', 'producto' => 'Teléfono', 'estado' => 'Entregado', 'fecha' => '2025-07-03'],
        ['id' => 4, 'cliente' => 'Carlos', 'producto' => 'Monitor', 'estado' => 'Entregado', 'fecha' => '2025-07-04'],
        ['id' => 5, 'cliente' => 'Elena', 'producto' => 'Impresora', 'estado' => 'Entregado', 'fecha' => '2025-07-05'],
        ['id' => 6, 'cliente' => 'Jorge', 'producto' => 'Teclado', 'estado' => 'Entregado', 'fecha' => '2025-07-06'],
        ['id' => 7, 'cliente' => 'Sofía', 'producto' => 'Mouse', 'estado' => 'Entregado', 'fecha' => '2025-07-07'],
        ['id' => 8, 'cliente' => 'Raúl', 'producto' => 'Cámara', 'estado' => 'Entregado', 'fecha' => '2025-07-08'],
        ['id' => 9, 'cliente' => 'Lucía', 'producto' => 'Auriculares', 'estado' => 'Enviado', 'fecha' => '2025-07-09'],
        ['id' => 10, 'cliente' => 'Daniel', 'producto' => 'Altavoces', 'estado' => 'Pendiente', 'fecha' => '2025-07-10'],
        ['id' => 11, 'cliente' => 'Isabel', 'producto' => 'Smartwatch', 'estado' => 'Entregado', 'fecha' => '2025-07-11'],
        ['id' => 12, 'cliente' => 'Hugo', 'producto' => 'Router', 'estado' => 'Enviado', 'fecha' => '2025-07-11'],
        ['id' => 13, 'cliente' => 'Valeria', 'producto' => 'Proyector', 'estado' => 'Pendiente', 'fecha' => '2025-07-11']
];
        
    }
}
