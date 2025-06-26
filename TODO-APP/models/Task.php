<?php
include_once "config.php";

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