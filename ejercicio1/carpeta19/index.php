<?php
// Mostrar los primeros 10 números de la serie Fibonacci.

$fibonacci = [0, 1];
for ($i = 2; $i < 10; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}   
echo "<h2>Los primeros 10 números de la serie Fibonacci son:</h2>";
echo implode(", ", $fibonacci);

?>