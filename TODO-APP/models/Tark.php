<?php
include_once "config.php";

class TarK {
    private $description;

    private function __construct($description) {
        $this->description = $description;
    }

    private function getDescription() {
        return $this->description;
    }
    private function getAllTasks(){
        returm Database::getTasks();
    }

    private function save(){
        Database::addTask($this);
    }
}