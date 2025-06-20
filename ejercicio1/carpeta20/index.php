<?php
// Pedir un número y mostrar si es primo o no.

$numero = 29; // Puedes cambiar este valor
$esPrimo = true;    
if ($numero <= 1) {
    $esPrimo = false;
} else {
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
}   
echo "<h2>El número $numero es " . ($esPrimo ? "primo" : "no primo") . "</h2>";
echo "<p>Un número primo es aquel que solo es divisible por 1 y por sí mismo.</p>";
echo "<p>Por ejemplo, el número 29 es primo porque solo se puede dividir por 1 y por 29.</p>";

?>
