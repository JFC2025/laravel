<?php
//registrar una funcion anómica como autoload
spl_autoload_register(function($class){
    // definir el prefijo
    $prefix = 'TodoApp\\';
    // definir la ruta base
    $base_dir =__DIR__ . '/src/';
    //longitud para coincidencias
    $len = strlen($prefix);
    // verificar la clase que quiere cargar
    if(strncmp($prefix,$class,$len)!== 0){
        return;

    }
    // extraer la parte del namespare  despues del prefijo
    $relative_class = substr($class,$len);

    $file = $base_dir . str_replace('\\','/', $relative_class).'.php';

    //si existe el archivo se añade
    if (file_exists($file)) {
        require $file; 
    }
});



use TodoApp\controllers\TaskController;

$controller = new TaskController();

$controller->handleRequest();

