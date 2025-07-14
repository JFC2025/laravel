<?php
require_once 'create_db.php';
require_once __DIR__ . '/src/config/config_db.php';
require_once __DIR__ . '/src/config/Database.php';
require_once __DIR__ . '/src/models/Libro.php';
require_once __DIR__ . '/src/controllers/LibroController.php';

use controllers\LibroController;

$controller = new LibroController();

// Manejo de acciones
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agregar'])) {
        $controller->agregarLibro($_POST['titulo'], $_POST['autor'], $_POST['anio']);
    } elseif (isset($_POST['eliminar'])) {
        $controller->eliminarLibro($_POST['id']);
    } elseif (isset($_POST['marcar_leido'])) {
        $controller->marcarComoLeido($_POST['id']);
    } elseif (isset($_POST['desmarcar_leido'])) {
        $controller->noLeido($_POST['id']);
    }
}

$libros = $controller->obtenerLibros();

require_once __DIR__ . '/src/views/libros_view.php';
