<?php
// clase abstracta
abstract class Figura {
  abstract public function area(); // Método abstracto para calcular el área
  
    }
// subclase Cuadrado
class Cuadrado extends Figura {

    //propiedad
    private $lado;  

    // metodo constructor
    public function __construct($lado) {
        $this->lado = $lado;
    }
    
    public function area() {
        return $this->lado * $this->lado; // Cálculo del área del cuadrado
    }
   
}

class rectangulo extends Figura {

    //propiedades
    private $base;
    private $altura;

    // metodo constructor
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    
    public function area() {
        return $this->base * $this->altura; // Cálculo del área del rectángulo
    }
}       



$cuadrado = new Cuadrado(5);
echo "El área del cuadrado es: " . $cuadrado->area() ."<br>";
$rectangulo = new rectangulo(4, 6);
echo "El area del rectangulo es: ". $rectangulo->area() ."<br>";

