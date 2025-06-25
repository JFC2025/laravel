<?php

require_once 'producto.php';
// Subclase Ropa
class Electronico extends Producto {
    private $marca;

    public function __construct($nombre, $precio, $marca) {
        parent::__construct($nombre, $precio);
        $this->marca = $marca;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Marca: {$this->marca}";
    }
}
