<?php

// Descripción: Crea un programa para gestionar libros en una biblioteca.
// Requisitos:
// 1. Define una clase Libro con atributos: titulo, autor y anioPublicacion.
// 2. Incluye un método mostrarInformacion() que muestre todos los datos del libro.
// 3. Crea al menos 3 objetos de la clase Libro y muestra su información usando el método.
// 4. Modifica uno de los atributos usando métodos (getters/setters) para practicar encapsulamiento.



// Clase Libro
class Libro {
    private $titulo;
    private $autor;
    private $anioPublicacion;

    // Constructor
    public function __construct($titulo, $autor, $anioPublicacion) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
    }

    // Método para mostrar información
    public function mostrarInformacion() {
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Año de Publicación: " . $this->anioPublicacion . "<br><br>";
    }

    // Getters y Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAnioPublicacion() {
        return $this->anioPublicacion;
    }

    public function setAnioPublicacion($anioPublicacion) {
        $this->anioPublicacion = $anioPublicacion;
    }
}

// 👇 Zona fuera de la clase: creación de objetos y uso del programa

$libro1 = new Libro("El Principito", "Antoine de Saint-Exupéry", 1943);
$libro2 = new Libro("Cien Años de Soledad", "Gabriel García Márquez", 1967);
$libro3 = new Libro("1984", "George Orwell", 1949);

// Mostrar la información
$libro1->mostrarInformacion();
$libro2->mostrarInformacion();
$libro3->mostrarInformacion();

// Encapsulamiento: modificar un atributo usando setter
$libro1->setTitulo("El Principito - Edición Especial");
echo "Nuevo título actualizado: " . $libro1->getTitulo() . "<br>";

?>
