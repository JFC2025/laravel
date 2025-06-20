<?php

// Contar cuántos números pares hay entre 1 y 50.
echo "<html><head><title>Conteo de Números Pares</title></head><body>";

// Declarar la variable del contador de pares
$contadorPares = 0; 
$sumaPares = 0; 
// Iniciar el bucle for
echo "<h3>Número pares: </h3>";
echo "2";
for ($numero = 3; $numero <= 50; $numero++) {
    // Verificar si el número es par
    if ($numero % 2 == 0) {
        // Incrementar el contador de pares
        echo ", $numero";
        $sumaPares += $numero; // Sumar el número par a la suma total
        $contadorPares++;
    }
}       
// Mostrar el resultado
echo "<h3>Contando números pares hasta el 50:</h3>";
echo "<h3>La cantidad de números pares entre 1 y 50 es: $contadorPares</h3>";
echo "<h3>La suma de todos los números pares entre 1 y 50 es: $sumaPares</h3>";
echo "</body></html>";


?>