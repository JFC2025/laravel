<?php

require_once 'Admin.php';
require_once 'Cliente.php';

$usuarios = [
    //  Usuario("Usuario Genérico", "generico@example.com"),
    new Admin("Ana Admin", "ana@admin.com", 5),
    new Cliente("Carlos Cliente", "carlos@cliente.com", 123.45)
];

foreach ($usuarios as $usuario) {
    echo $usuario->mostrarInformacion() . "<br>";
}