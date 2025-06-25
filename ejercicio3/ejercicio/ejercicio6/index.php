<?php

// herencias
require_once 'producto.php';
require_once 'carrito.php';

$carrito = new Carrito();
$carrito->agregarProducto(new Producto("Camisa", 20.00));
$carrito->agregarProducto(new Producto("Pantalón", 35.50));
$carrito->agregarProducto(new Producto("Zapatos", 50.00));
$carrito->agregarProducto(new Producto("Gorra", 10.00));
$carrito->agregarProducto(new Producto("Cinturón", 15.00));
$carrito->agregarProducto(new Producto("Calcetines", 5.00));

// Mostrar productos
echo "<h2>Productos en el carrito:</h2><ul>";
foreach ($carrito->obtenerProductos() as $producto) {
    echo "<li>" . htmlspecialchars($producto->getNombre()) . ": €" . number_format($producto->getPrecio(), 2) . "</li>";
}
echo "</ul>";

// Mostrar total
echo "<p><strong>Total a pagar:</strong> €" . number_format($carrito->calcularTotal(), 2) . "</p>";

