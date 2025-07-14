<?php
namespace TodoApp\Controllers;

use TodoApp\Models\Task;


class TaskController
{
    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['description']) && !empty(trim($_POST['description']))) {
                Task::add(trim($_POST['description']));
            }
        }

        if (isset($_GET['toggle'])) {
            $id = (int) $_GET['toggle'];
            Task::toggle($id);
        }

        if (isset($_GET['delete'])) {
            $id = (int) $_GET['delete'];
            Task::delete($id);
        }

        $tasks = Task::getAll();

        include __DIR__ . '/../views/tasks_view.php';  
    }
}
