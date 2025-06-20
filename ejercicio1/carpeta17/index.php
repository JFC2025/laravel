<?php
// Mostrar todos los múltiplos de 3 entre 1 y 30.

$multiplosDeTres = [];
for ($i = 1; $i <= 30; $i++) {
    if ($i % 3 == 0) {
        $multiplosDeTres[] = $i;
    }
}       
echo "<h2>Múltiplos de 3 entre 1 y 30:</h2>";
echo implode(", ", $multiplosDeTres);   

?>