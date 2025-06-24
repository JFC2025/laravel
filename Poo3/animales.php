<?php
// polimorfismo
class ave {
    public function sonido() {
        echo "Pio Pio ....<br>";
    }
}

class Gato extends ave {
    public function sonido() {
        echo "Miauu Miauu ....<br>";
    }
}
$animales = [new ave(), new Gato()];

// Recorremos el array de animales y llamamos al método sonido de cada uno  
   
foreach ($animales as $animal) {
    $animal->sonido(); // Llamar al método sonido de cada animal
    echo "<br>";
    
}


