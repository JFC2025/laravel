<?php
// <!-- 4. Sistema de notificaciones
// Descripción: Crea un sistema que envía notificaciones:
// ● Notificacion (clase base): atributo mensaje.
// ● Email y SMS (heredan de Notificacion): atributos direccionEmail y numeroTelefono.
// Implementa:
// ● Método enviar() que se comporte distinto según el tipo de notificación (polimorfismo).
// ● Probar con una lista mixta de notificaciones. -->

// Clase
class Notificacion {
    protected $mensaje;

    public function __construct($mensaje) {
        $this->mensaje = $mensaje;
    }

    public function enviar() {
        return "Enviando notificación: {$this->mensaje}";
    }

    public function mostrarInformacion() {
        return $this->enviar();
    }
}
