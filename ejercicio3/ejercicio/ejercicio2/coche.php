<?php

require_once 'vehiculos.php';
// Subclase Coche
class Coche extends Vehiculo {
    private $numPuertas;

    public function __construct($marca, $modelo, $precioDia, $numPuertas) {
        parent::__construct($marca, $modelo, $precioDia);
        $this->numPuertas = $numPuertas;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Número de puertas: {$this->numPuertas}";
    }
}   