<?php
namespace controllers;

use config\Database;
use models\Libro;
use PDO;

class LibroController {
    private $db;

    public function __construct() {
        $this->db = Database::conectar();
    }

    public function obtenerLibros() {
        $stmt = $this->db->query("SELECT * FROM libros");
        $libros = [];

        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $libros[] = new Libro(
                $fila['titulo'],
                $fila['autor'],
                $fila['anio'],
                $fila['leido'],
                $fila['id']
            );
        }
        return $libros;
    }

    public function agregarLibro($titulo, $autor, $anio) {
        $stmt = $this->db->prepare("INSERT INTO libros (titulo, autor, anio) VALUES (?, ?, ?)");
        $stmt->execute([$titulo, $autor, $anio]);
    }

    public function eliminarLibro($id) {
        $stmt = $this->db->prepare("DELETE FROM libros WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function marcarComoLeido($id) {
        $stmt = $this->db->prepare("UPDATE libros SET leido = 1 WHERE id = ?");
        $stmt->execute([$id]);
    }

        public function noLeido($id) {
        $stmt = $this->db->prepare("UPDATE libros SET leido = 0 WHERE id = ?");
        $stmt->execute([$id]);
    }


}
