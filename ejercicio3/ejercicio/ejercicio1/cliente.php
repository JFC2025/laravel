<?php
require_once 'usuario.php';
// Subclase Cliente
class Cliente extends Usuario {
    private $saldo;

    public function __construct($nombre, $email, $saldo) {
        parent::__construct($nombre, $email);
        $this->saldo = $saldo;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Saldo: {$this->saldo}";
    }
}
