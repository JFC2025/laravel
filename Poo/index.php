<?php



require_once "saiyajin.php";

 // instanciamos la clase
    $goku = new Saiyajin("Goku", 10000);
  //  var_dump($goku);
echo "<br>";
    $goku2 = new Saiyajin("Goku2", 3000);
 //   var_dump($goku2);

// saludo de goku
echo "<br>";
echo $goku-> saludar();

// nivel de pelea de goku
echo "<br>";
echo $goku-> NivelPelea();
// saludo de goku2
echo "<br>";
echo $goku2-> saludar();
// nivel de pelea de goku2
echo "<br>";
echo $goku2-> NivelPelea();

// crear otro personaje
$vegeta = new Saiyajin("Vegeta", 8000);
// saludo de vegeta
echo "<br>";        
 echo $vegeta-> saludar();
 // nivel de pelea de vegeta
 echo "<br>";
    echo $vegeta-> NivelPelea();

// nivel sayajin en funcion del poder
function nivelSayajin(int $nivel_poder): string {
    if ($nivel_poder < 5000) {
        return "Bajo";
    } elseif ($nivel_poder < 8000) {
        return "Medio";
    } elseif ($nivel_poder < 10000) {
        return "Alto";
    } else {
        return "Ultra";
    }
}   
// mostrar nivel de sayajin
//echo "<br>";
//echo "El nivel de {$goku->getNombre()} es: " . nivelSayajin($goku->getNivelPoder());
//echo "<br>";
//echo "El nivel de {$goku2->getNombre()} es: " . nivelSayajin($goku2->getNivelPoder());
//echo "<br>";
//echo "El nivel de {$vegeta->getNombre()} es: " . nivelSayajin($vegeta->getNivelPoder());
// mostrar nivel de sayajin de todos los personajes
$personajes = [$goku, $goku2, $vegeta];
foreach ($personajes as $personaje) {

  
// peleas de los personajes
    echo "<br>";
    echo "El nivel de {$personaje->getNombre()} es: " . nivelSayajin($personaje->getNivelPoder());
    echo "<br>";
    echo "{$personaje->getNombre()} tiene un nivel de pelea de {$personaje->getNivelPoder()} y su nivel de sayajin es: " . nivelSayajin($personaje->getNivelPoder());
    echo "<br>";    
    if ($personaje->getNivelPoder() > 8000) {
        echo "{$personaje->getNombre()} es un sayajin de nivel Ultra!";
    } elseif ($personaje->getNivelPoder() > 5000) {
        echo "{$personaje->getNombre()} es un sayajin de nivel Alto!";
    } elseif ($personaje->getNivelPoder() > 3000) {
        echo "{$personaje->getNombre()} es un sayajin de nivel Medio!";
    } else {
        echo "{$personaje->getNombre()} es un sayajin de nivel Bajo!";
    }
    echo "<br>";
    echo "----------------------------------";

// pelea entre personajes con nivel de poder y puntos resultado
    echo "<br>";
    echo "Peleas entre personajes:<br>";
    echo "----------------------------------<br>";
    // Comparamos el personaje actual con los demás personajes con colores cada uno
    

    foreach ($personajes as $oponente) {
        if ($personaje !== $oponente) {
            echo "{$personaje->getNombre()} vs {$oponente->getNombre()}: ";
            if ($personaje->getNivelPoder() > $oponente->getNivelPoder()) {
                echo "{$personaje->getNombre()} gana!";
            } elseif ($personaje->getNivelPoder() < $oponente->getNivelPoder()) {
                echo "{$oponente->getNombre()} gana!";
            } else {
                echo "Empate!";
            }
            echo "<br>";
        }
    }

    //colores para los personajes
    echo "<br>";
    if ($personaje->getNivelPoder() > 8000) {
        echo "<span style='color: red;'>{$personaje->getNombre()} es un sayajin de nivel Ultra!</span>";
    } elseif ($personaje->getNivelPoder() > 5000) {
        echo "<span style='color: orange;'>{$personaje->getNombre()} es un sayajin de nivel Alto!</span>";
    } elseif ($personaje->getNivelPoder() > 3000) {
        echo "<span style='color: yellow;'>{$personaje->getNombre()} es un sayajin de nivel Medio!</span>";
    } else {
        echo "<span style='color: green;'>{$personaje->getNombre()} es un sayajin de nivel Bajo!</span>";
    } 
    
    // quiero la imagen de goku, goku2 y vegeta
    echo "<br>";
    if ($personaje->getNombre() === "Goku") {
        echo "<img src='https://www.yourdecoration.es/cdn/shop/products/abystyle-abydco571-dragon-ball-super-goku-ultra-instinct-poster-38x52cm_500x.jpg?v=1709735022' alt='Goku' width='200'>";
    } elseif ($personaje->getNombre() === "Goku2") {
        echo "<img src='https://erikstore.com/28107-large_default/poster-grande-dragon-ball-z-ss-goku.jpg' alt='Goku2' width='200'>";
    } elseif ($personaje->getNombre() === "Vegeta") {
        echo "<img src='https://ih1.redbubble.net/image.2664870444.3998/flat,750x,075,f-pad,750x1000,f8f8f8.u2.jpg' alt='Vegeta' width='200'>";
    }
    
//crear una portada de cada personaje 


    echo "<br>";
    echo "<h2>Portada de {$personaje->getNombre()}</h2>";
    echo "<div style='border: 2px solid black; padding: 10px; width: 220px; text-align: center;'>";
    echo "<img src='https://www.yourdecoration.es/cdn/shop/products/abystyle-abydco571-dragon-ball-super-goku-ultra-instinct-poster-38x52cm_500x.jpg?v=1709735022' alt='{$personaje->getNombre()}' width='200'>";
    echo "<h3>{$personaje->getNombre()}</h3>";
    echo "<p>Nivel de poder: {$personaje->getNivelPoder()}</p>";
    echo "</div>";
    echo "<br>";
    echo "----------------------------------<br>";


    
}
?>