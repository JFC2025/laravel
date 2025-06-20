<?php
// Sumar los números del 1 al 100 usando un bucle for.

// Declarar la variable para almacenar la suma
$suma = 0;
// Iniciar el bucle for
for ($i = 1; $i <= 100; $i++) {
    // Sumar el número actual a la suma total
    $suma += $i;
}   
// Mostrar el resultado
echo "<html><head><title>Suma del 1 al 100</title></head><body>";
echo "<h3>La suma de los números del 1 al 100 es: $suma</h3>";
echo "</body></html>";  


?>
