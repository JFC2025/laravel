<?php
// 5. Registro de animales (uso de interfaces)
// Descripción: Construye una mini aplicación para registrar animales en un zoológico:
// ● Animal (clase base): atributo nombre.
// ● Perro y Gato (heredan de Animal): método hacerSonido() específico para cada uno.
// Agrega una interfaz Mascota con método jugar() que ambos implementen.

class Animal {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
}
