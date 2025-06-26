<?php
namespace App\Usuarios;

class Usuario
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function saludar(): string
    {
        return "Hola, mi nombre es {$this->nombre}.";
    }
}
