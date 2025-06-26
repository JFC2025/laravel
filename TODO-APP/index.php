<?php

require_once "src/controllers/TaskController.php";

use TodoApp\controllers\TaskController;

$controller = new TaskController();

$action =isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action){
    case 'add':
        $controller->addTask();
        break;

    default:
        $controller->index();
        break;
}