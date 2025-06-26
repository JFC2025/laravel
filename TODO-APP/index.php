<?php

require_once "controllers/TaskController.php";

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