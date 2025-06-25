<?php

// Catálogo de productos
// Descripción: Desarrolla un catálogo de productos con distintas categorías:
// ● Producto (clase base): atributos nombre, precio.
// ● Electronico y Ropa (heredan de Producto): atributos extra (garantia, talla respectivamente).
// Implementa:
// ● Método mostrarDetalle() en la clase base y sobreescribirlo en cada subclase para mostrar toda la información.
// ● Usa encapsulamiento para validar que el precio siempre sea positivo.

class Producto {
    protected $nombre;
    protected $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->setPrecio($precio);
    }

    public function setPrecio($precio) {
        if ($precio < 0) {
            throw new Exception("El precio debe ser positivo.");
        }
        $this->precio = $precio;
    }

    public function mostrarInformacion() {
        return "Nombre: {$this->nombre}, Precio: {$this->precio}";
    }
}
