
<?php

// 6. Carrito de compras con validación
// Descripción: Crea una clase Carrito que permita agregar Productos:
// ● Usa encapsulamiento para que no se puedan modificar los productos desde fuera del carrito.
// ● Método para calcular

// clase carrito
class Carrito {
    private array $productos = [];

    public function agregarProducto(Producto $producto): void {
        $this->productos[] = $producto;
    }

    public function obtenerProductos(): array {
        return $this->productos;
    }

    public function calcularTotal(): float {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
          
        }
        // precio total
        echo "<p>Total sin descuento: €" . number_format($total, 2) . "</p>";
        

        if (count($this->productos) > 5) {
            $total *= 0.9; // 10% de descuento
            // por pantalla
            echo "<p>¡Descuento del 10% aplicado por tener más de 5 productos!</p>";

        }
// descuento del 10% si hay más de 5 productos por pantall
        
        return round($total, 2);
    }
    
}

