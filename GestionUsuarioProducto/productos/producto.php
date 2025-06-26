<?php

namespace App\Productos;

class Producto
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function mostrar(): string
    {
        return "El producto es: {$this->nombre}.";
    }
}
