<?php
require_once "vehiculo.php";

class Coche extends Vehiculo {
    private int $puertas;

    public function __construct(string $color, string $marca, int $puertas) {
        parent::__construct($marca, $color);
        $this->puertas = $puertas;
    }

    public function getPuertas(): int {
        return $this->puertas;
    }

    
    public function setPuertas(int $puertas): void {
        $this->puertas = $puertas;
    }

    public function mostrarInfo(): string {
        return parent::mostrarInfo() . ", Puertas: {$this->puertas}";
    }
    public function mostrarTipocoche(): void {
        echo "Este coche esta corriendo {$this->getMarca()} y color {$this->getColor()}.";
    }
}
?>
