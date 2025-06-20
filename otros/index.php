<?php
$encabezado = "<html><head><title></title></head><body>";
$pie = "</body></html>";

echo $encabezado;
$num  = 0;

// bucle while
echo "<h4>Mientras \$num &alt;= 5</h4>";
while ($num <= 5) {
    echo "<p>El número es: $num</p>";
    $num++;
}


?>
