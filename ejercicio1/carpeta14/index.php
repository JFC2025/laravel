<?php

// Mostrar la suma de los números impares del 1 al 50.

    $sumatoria = 0;     
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 2 != 0) {
            $sumatoria += $i;
        }
    }
    echo "<h2>La suma de los números impares del 1 al 50 es: $sumatoria</h2>";
    

?>