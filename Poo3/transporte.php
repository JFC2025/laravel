<?php
// interface Transporte 
    interface Transporte {
        public function moverse();
    }
    class bicicleta implements Transporte {
        public function moverse() {
            echo "La bicicleta se esta moviendo.<br>";
        }
    }

    $bike = new bicicleta();
    $bike->moverse(); // Llamar al método moverse de la clase bicicleta
  
