<?php

//herencia
require_once 'notificacion.php';
// Subclase sms
class Sms extends Notificacion {
    private $numeroTelefono;

    public function __construct($mensaje, $numeroTelefono) {
        parent::__construct($mensaje);
        $this->numeroTelefono = $numeroTelefono;
    }

    public function enviar() {
        // Lógica para enviar un SMS
        return "Enviando SMS al {$this->numeroTelefono}: {$this->mensaje}";
    }

    public function mostrarInformacion() {
        return "SMS: {$this->mensaje}, Número de teléfono: {$this->numeroTelefono}";
    }
}   
