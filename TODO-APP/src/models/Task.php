<?php
namespace TodoApp\Models;
// require_once "src/config/Database.php";


use todoApp\config\Database;

class Task {
    private $description;

    public function __construct($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }
    public static function getAllTasks(){
        return Database::getTasks();
    }

    public function save(){
        Database::addTask($this);
    }
}