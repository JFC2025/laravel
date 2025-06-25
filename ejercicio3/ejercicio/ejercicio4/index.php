<?php

//herencia
require_once 'email.php';
require_once 'sms.php';

// visualizar los mensajes
$notificaciones = [
    new Email("Hola, este es un mensaje de prueba", "correo@email.com"),
    new Sms("Hola, este es un mensaje de prueba", "1234567890")
    ];
    foreach ($notificaciones as $notificacion) {
        echo $notificacion->mostrarInformacion() . "<br>";
        echo $notificacion->enviar() . "<br>";
    }

