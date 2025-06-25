<?php

// 2. Gestión de vehículos
// Descripción: Modela una aplicación para una empresa de alquiler de vehículos:
// ● Vehiculo (clase base): atributos marca, modelo, precioDia.
// ● Coche y Moto (heredan de Vehiculo): atributo adicional (numPuertas para coche, cilindrada para moto).
// Implementa:

class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $precioDia;

    public function __construct($marca, $modelo, $precioDia) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->precioDia = $precioDia;
    }

    public function mostrarInformacion() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Precio por día: {$this->precioDia}";
    }
}
