<?php
namespace TodoApp\Models;
// require_once "src/config/Database.php";


use todoApp\config\Database;
use PDO;

class Task {

    public static function getAll()
    {
        $pdo = Database::connect();
        $stmt = $pdo->query("SELECT * FROM task ORDER BY id DESC");
        ruturm $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        public static function add($description)
        {
            $pdo =Database::connect();
            $stmt = $pdo->prepare("INSERT INTO task (description) VALUES (:description");
            $stmt->execute(['description'=> $description]);
        }

        public static function toggle($id)
        {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("UPDATE task SET completed = NOT completed WHERE  id = :id");
            $stmt->execute(['id' => $id]);

        }

        public static function delete($id)
        {
            $pdo = Database::connect();
            $stmt = $pdo->prepare("DELETE FROM task WHERE id =:id");
             $stmt->execute(['id' => $id]);

        }
        
    // private $description;

    // public function __construct($description) {
    //     $this->description = $description;
    // }

    // public function getDescription() {
    //     return $this->description;
    // }
    // public static function getAllTasks(){
    //     return Database::getTasks();
    // }

    // public function save(){
    //     Database::addTask($this);
    // }
}