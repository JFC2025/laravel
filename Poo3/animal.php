<?php

// herencia
// clase padre
class Animal { 
     
    public function comer() {
        echo "El animal esta comiendo<br>";
    }
 }
 // clase hijo
class Perro extends Animal { 
     
    public function ladrar() {
        echo "El perro esta ladrando...<br>";
    }
 }

 $perro = new Perro();
    $perro->comer(); // Llamar al método de la clase padre
    echo "<br>";
    $perro->ladrar(); // Llamar al método de la clase hijo
    
