<?php

// herancia
require_once 'notificacion.php';

// Subclase Email
class Email extends Notificacion {
    private $direccionEmail;

    public function __construct($mensaje, $direccionEmail) {
        parent::__construct($mensaje);
        $this->direccionEmail = $direccionEmail;
    }

    public function enviar() {
        // Lógica para enviar un correo electrónico
        return "Enviando Email a {$this->direccionEmail}: {$this->mensaje}";
    }

    public function mostrarInformacion() {
        return "Email: {$this->mensaje}, Dirección de email: {$this->direccionEmail}";
    }
}
