<?php

namespace App\Models;

class Factura
{
    public static function todas()
    {
        return [
            ['numero' => 'F001', 'cliente' => 'Cliente A', 'importe' => 1200, 'fecha' => '2025-07-01'],
            ['numero' => 'F002', 'cliente' => 'Cliente B', 'importe' => 800,  'fecha' => '2025-07-02'],
            ['numero' => 'F003', 'cliente' => 'Cliente C', 'importe' => 1500, 'fecha' => '2025-07-03'],
            ['numero' => 'F004', 'cliente' => 'Cliente D', 'importe' => 600,  'fecha' => '2025-07-04'],
        ];
    }
}
