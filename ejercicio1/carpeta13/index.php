<?php

// Calcular el factorial de un número dado.

$numero = 5;
$factorial = 1; 
for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}
echo "<h2>El factorial de $numero es $factorial</h2>";
echo "<p>El factorial se calcula multiplicando todos los números enteros desde 1 hasta $numero.</p>";
echo "<p>Por ejemplo, el factorial de 5 es: 1 x 2 x 3 x 4 x 5 = $factorial</p>";


?>