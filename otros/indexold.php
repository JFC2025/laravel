<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web</title>
</head>

<body>
    <h1 style="color: blue;">Bienvenido a mi Web</h1>
    <?php
    echo '<span style="color: red;">Hola mundo!</span>';
   
    echo '<span style="color: black;">&nbsp; Hola Francis!</span>';
    echo '<span style="color: black;">&ensp; Hola Francis!</span>';
    echo '<span style="color: black;">&emsp; Hola Francis!</span>';
   echo '<pre><span style="color:red;">VAMOS A REALIZAR ALGUNAS OPERACIONES !</span></pre>';

    // variable en php
    $num1 = 10;
    $num2 = 2.5;

    echo '<br>'; // comentario en linea espacio
    
    echo "numero 10 numero 2.5";
    echo "<br>".'Suma:'.$num1+$num2; // concatenación de variables 

    echo "<br>".'resta:'.$num1-$num2; // concatenación de variables 

    echo "<br>".'multiplica:'.$num1*$num2; // concatenación de variables 

     echo "<br>".'division:'.$num1/$num2; // concatenación de variables

    ?>
</body>

</html>