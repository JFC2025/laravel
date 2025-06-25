<?php
//herencias
require_once 'perro.php';
require_once 'gato.php';
require_once 'animal.php';      

$perro = new Perro("Firulais", "Labrador");
$gato = new Gato("Miau", "Siames");
echo "El perro se llama " . $perro->getNombre() . " y es de raza " . $perro->getRaza() . ". Hace el sonido: " . $perro->hacerSonido() . "<br>";
echo "El gato se llama " . $gato->getNombre() . " y es de raza " . $gato->getRaza() . ". Hace el sonido: " . $gato->hacerSonido() . "<br>";

