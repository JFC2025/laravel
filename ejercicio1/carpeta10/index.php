<?php

// Mostrar los números pares del 1 al 20 usando un bucle for.


// Iniciar el bucle for
for ($contador = 1; $contador <= 20; $contador++) { 
    // Verificar si el número es par
    if ($contador % 2 == 0) {
        // Mostrar el número actual
        echo "<html><head><title>Números Pares del 1 al 20</title></head><body>";
        echo "<h3>Número par: $contador</h3>";
        echo "</body></html>";
    }
}   

?>
