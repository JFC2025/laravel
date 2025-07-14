<?php
namespace models;

class Libro {
    public $id;
    public $titulo;
    public $autor;
    public $anio;
    public $leido;

    public function __construct($titulo, $autor, $anio, $leido = false, $id = null) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
        $this->leido = $leido;
        $this->id = $id;
    }
}
