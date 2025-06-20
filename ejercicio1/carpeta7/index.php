<?php

// Mostrar el mayor de tres números usando condicionales.

// Declarar las variables con los números
$num1 = 10;
$num2 = 20;     
$num3 = 15;
// Comparar los números
if ($num1 >= $num2 && $num1 >= $num3) {
    // Mostrar el resultado
    echo "<html><head><title>Mayor de Tres Números</title></head><body>";

    echo "<h3>$num1 es el mayor de los tres números: $num1, $num2, $num3</h3>";
    echo "</body></html>";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    // Mostrar el resultado
    echo "<html><head><title>Mayor de Tres Números</title></head><body>";
    echo "<h3>$num2 es el mayor de los tres números: $num1, $num2, $num3</h3>";
    echo "</body></html>";
} else {
    // Mostrar el resultado
    echo "<html><head><title>Mayor de Tres Números</title></head><body>";
    echo "<h3>$num3 es el mayor de los tres números: $num1, $num2, $num3</h3>";
    echo "</body></html>";
}  


?>