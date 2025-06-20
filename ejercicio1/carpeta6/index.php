<?php
// Evaluar si una persona es mayor de edad con base en su edad.

// Declarar la variable con la edad
$edad = 18;         
// Verificar si la persona es mayor de edad
if ($edad >= 18) {      
    // Mostrar el mensaje si es mayor de edad
    echo "<html><head><title>Mayor de Edad</title></head><body>";
    echo  "<h2>La persona tiene 18 Años.</h2>";
    echo "<h3>La persona es mayor de edad.</h3>";
    echo "</body></html>";
} else {
    // Mostrar el mensaje si no es mayor de edad
    echo "<html><head><title>No Mayor de Edad</title></head><body>";
    echo "<h3>La persona no es mayor de edad.</h3>";
    echo "</body></html>";
}



?>