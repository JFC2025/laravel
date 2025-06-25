<?php
// Clase Vehiculo

require_once 'ropa.php';
require_once 'electronico.php';
// visualizar la información de los productos
$productos = [
    new Ropa("Camiseta", "Algodón", 20, "M"),
    new Electronico("Teléfono", "Smartphone", 300, "Samsung")
];
foreach ($productos as $producto) {
    echo $producto->mostrarInformacion() . "<br>";
}