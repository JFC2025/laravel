<?php

// Generar la tabla de multiplicar del 5 usando un bucle.

$numero = 5;
echo "<h2>Tabla de multiplicar del $numero</h2>";   
    for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado<br>";
}


?>