<?php


require_once 'vehiculos.php';
// Subclase Moto
class Moto extends Vehiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $precioDia, $cilindrada) {
        parent::__construct($marca, $modelo, $precioDia);
        $this->cilindrada = $cilindrada;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Cilindrada: {$this->cilindrada}";
    }
}   