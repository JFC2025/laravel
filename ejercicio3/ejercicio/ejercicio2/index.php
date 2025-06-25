<?php
// Clase Vehiculo
require_once 'moto.php';
require_once 'coche.php';

// visualizar la información de los vehículos
$vehiculos = [ 
    //new Vehiculo("Vehículo Genérico", "Modelo X", 50),
    new Coche("Toyota", "Corolla", 70, 4),
    new Moto("Yamaha", "MT-07", 40, 689)
];
foreach ($vehiculos as $vehiculo) {
    echo $vehiculo->mostrarInformacion() . "<br>";
    
}