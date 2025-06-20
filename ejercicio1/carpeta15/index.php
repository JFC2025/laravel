<?php
//  Pedir tres notas y calcular la media, luego indicar si está aprobado (media >= 5).

$nota1 = 7; 
$nota2 = 8;
$nota3 = 6; 
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "<h2>Notas: $nota1, $nota2, $nota3</h2>";
echo "<p>La media es: $media</p>";      
if ($media >= 5) {
    echo "<p>¡Estás aprobado!</p>";
} else {
    echo "<p>Lo siento, estás suspendido.</p>";
}       


?>