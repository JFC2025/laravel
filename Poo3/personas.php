<?php
// definir clase
class Persona {
    // Atributos
    public $nombre;
  

    // Constructorcrear un metodo
    public function BuenosDias() {
        echo "hola que tal?,soy {$this->nombre} <br>";
    }
}

    // creamos un objecto
$persona1 = new Persona();
$persona1->nombre = "Francis";
$persona1->BuenosDias(); // Llamar al método

?>

        