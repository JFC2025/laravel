<?php
require_once "coche.php";
require_once "moto.php";

// Coche
$miCoche = new Coche("Toyota", "Rojo", 4);
echo "<h2>Coche</h2>";
echo "<p>" . $miCoche->mostrarInfo() . "</p>";
$miCoche->mostrarTipo();
echo "<br>";
$miCoche->mostrarTipocoche();
echo "<br>";


// Moto
$miMoto = new Moto("Yamaha", "Azul", 600);
echo "<h2>Moto</h2>";
echo "<p>" . $miMoto->mostrarInfo() . "</p>";
$miMoto->HacerCaballito();
?>
