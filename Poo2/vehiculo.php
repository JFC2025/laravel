<?php 
class vehiculo {
    // propiedades
    protected $color;
    protected $marca;

    //metodo constructor
    public function __construct($color, $marca) {
        $this->color = $color;
        $this->marca = $marca;
    }

    // metodo para obtener el color
    public function getColor() {
        return $this->color;
    }
    // metodo para obtener la marca
    public function getMarca() {
        return $this->marca;
    }
    // metodo para obtener la informacion del vehiculo  
    public function getInfo() {
        return "Color: " . $this->getColor() . ", Marca: " . $this->getMarca();
    }   
    // metodo para mostrar la informacion del vehiculo
    public function mostrarInfo() {
        echo $this->getInfo();
    }
    // metodo para mostrar el tipo de vehiculo
    public function mostrarTipo() {
        echo "Este es un vehiculo esta encendido.";
    }

}
?>