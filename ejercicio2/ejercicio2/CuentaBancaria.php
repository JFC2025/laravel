<?php

// <!-- Sistema de Cuentas Bancarias
// Descripción: Simula operaciones básicas de cuentas bancarias para practicar clases, métodos y encapsulamiento.
// Requisitos:
// 1. Define una clase CuentaBancaria con atributos privados: titular y saldo.
// 2. Implementa métodos: depositar(cantidad), retirar(cantidad) y mostrarSaldo().
// 3. Valida que no se pueda retirar más dinero del disponible.
// 4. Crea un objeto CuentaBancaria y realiza varias operaciones, mostrando el saldo después de cada una. -->

// Clase CuentaBancaria
class CuentaBancaria {
    private $titular;
    private $saldo;

    // Constructor
    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }   
    // metodo para mostrar el saldo
    public function mostrarSaldo() {
        echo "Titular: " . $this->titular . "<br>";
        echo "Saldo: $" . $this->saldo . "<br><br>";
    }

    // Método para depositar dinero
    public function depositar($cantidad) {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            echo "Depositados: $" . $cantidad . "<br>";
        } else {
            echo "Cantidad a depositar debe ser positiva.<br>";
        }
        $this->mostrarSaldo();
    }
    // Método para retirar dinero
    public function retirar($cantidad) {    
        if ($cantidad > 0 && $cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
            echo "Retirados: $" . $cantidad . "<br>";
        } elseif ($cantidad > $this->saldo) {
            echo "No se puede retirar más de lo que hay en la cuenta.<br>";
        } else {
            echo "Cantidad a retirar debe ser positiva.<br>";
        }
        $this->mostrarSaldo();
    }

}
// 👇 Zona fuera de la clase: creación de objetos y uso del programa
$cuenta1 = new CuentaBancaria("Juan Pérez", 1000);
$cuenta1->mostrarSaldo();
$cuenta1->depositar(500);
$cuenta1->retirar(300);
$cuenta1->retirar(1500); // Intento de retirar más de lo que hay en la cuenta
$cuenta1->retirar(-100); // Intento de retirar una cantidad negativa
$cuenta1->depositar(-200); // Intento de depositar una cantidad negativa
$cuenta1->mostrarSaldo();





?>