<?php
class Database {
    private static $tasks = [];
    public static function getTask() {
        
        
        return self::$tasks;
        }
    public static function setTask($task) {
      self::$tasks = $task;  
    }
}    
    