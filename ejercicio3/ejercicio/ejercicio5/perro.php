<?php
//herencia
require_once 'animal.php';

class Perro extends Animal {
    private $raza;

    public function __construct($nombre, $raza) {
        parent::__construct($nombre);
        $this->raza = $raza;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function hacerSonido() {
        return "Guau";
    }
}
