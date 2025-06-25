<?php

require_once 'producto.php';
// Subclase Ropa
class Ropa extends Prenda {
    private $talla;

    public function __construct($nombre, $precio, $talla) {
        parent::__construct($nombre, $precio);
        $this->talla = $talla;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Talla: {$this->talla}";
    }
}
