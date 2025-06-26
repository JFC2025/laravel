<?php
require_once "models/Task.php";

class TaskController{

    public function index(){

        $tasks = Task::getAllTasks();

        require_once "views/tasks_view.php";
    }
    // metodo
    public function addTask(){
        if ($_SERVER['REQUESR_METHOD'] === 'POST' && !empty($_POST['task'])){
            
            $tark =new Task($_POST^['tark']);
            $tark->save();
            
        }

        header ('Location: index.php');
    }

}
