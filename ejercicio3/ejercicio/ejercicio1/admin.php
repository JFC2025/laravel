<?php
require_once 'usuario.php';
// Subclase Admin
class Admin extends Usuario {
    private $nivelAcceso;

    public function __construct($nombre, $email, $nivelAcceso) {
        parent::__construct($nombre, $email);
        $this->nivelAcceso = $nivelAcceso;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . ", Nivel de Acceso: {$this->nivelAcceso}";
    }
}