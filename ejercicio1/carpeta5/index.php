<?php
// Determinar si un número es par o impar.

// Declarar la variable con el número
$numero = 7;        
// Verificar si el número es par o impar
if ($numero % 2 == 0) {
    // Mostrar el resultado si es par
    echo "<html><head><title>Número Par</title></head><body>";
    echo "<h3>El número $numero es par.</h3>";
    echo "</body></html>";
} else {
    // Mostrar el resultado si es impar
    echo "<html><head><title>Número Impar</title></head><body>";
    echo "<h3>El número $numero es impar.</h3>";
    echo "</body></html>";
}



?>