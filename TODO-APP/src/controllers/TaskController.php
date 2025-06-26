<?php
namespace TodoApp\Controllers;
require_once "src/models/Task.php";


use TodoApp\Models\Task;

class TaskController{

    public function index(){

        $tasks = Task::getAllTasks();

        require_once "src/views/tasks_view.php";
    }
    // metodo
    public function addTask(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])){
            
            $task =new Task($_POST['task']);
            $task->save();
            
        }

        header ('Location: index.php');
    }

}
