<?php
require_once "vehiculo.php";

class Moto extends Vehiculo {
    private int $cilindrada; // en centímetros cúbicos

    public function __construct(string $marca, string $color, int $cilindrada) {
        parent::__construct($marca, $color);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada(): int {
        return $this->cilindrada;
    }

    public function setCilindrada(int $cilindrada): void {
        $this->cilindrada = $cilindrada;
    }

    public function mostrarInfo(): string {
        return parent::mostrarInfo() . ", Cilindrada: {$this->cilindrada}cc";
    }
    public function HacerCaballito(): void {
        echo "¡Haciendo caballito con la moto {$this->getMarca()} de {$this->getColor()}!";
        

    }
}
?>