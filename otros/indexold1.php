
<?php
echo "<html><head><title>Decisiones</title></head><body>";
$num = 5;
/*
Operadores de comparación
>, <, >=, <=
== igualdad
=== igualdad estricta (tipo y valor)
!= desigualdad
!== desigualdad estricta (tipo y valor)

*/
// Sentencia if
echo "<h3>Ejecutando la sentencia if:</h3>";
if ($num > 4){
    echo "<p>El número es mayor que 4</p>";
}
// Sentencia if-else
echo "<h3>Ejecutando la sentencia if-else:</h3>";
if ($num >= 0){
    echo "<p>El número es positivo</p>";
} else {
    echo "<p>El número es negativo</p>";
}
// Sentencia if-elseif-else
echo "<h3>Ejecutando la sentencia if-elseif-else:</h3>";
if ($num > 0){
    echo "<h3>El número es positivo</h3>";
} else if (num <0){
    echo "<p>El número es negativo</p>";
} else {
    echo "<p>El número es </p>";
}
// Sentencia switch
echo "<h3>Ejecutando la sentencia switch:</h3>";

switch ($num) {
    case 0;
        echo "<p>El número es cero";
        break;
    case 1:
        echo "<p>El número es uno>";
        break;
    case 2:
        echo "<p>El número es dos>";
        break;
    
        echo "<p>El número no es ni uno, ni dos</p>";  
         break;
}

echo "</body></html>";
