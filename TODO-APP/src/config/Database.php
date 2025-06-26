<?php

namespace TodoApp\Config;
//src/config/Database.php
class Database {
    private static $tasks = [];
    public static function getTasks() {
        session_start();
        return isset($_SESSION['tasks']) ? $_SESSION['tasks']:[];
        
        //return self::$tasks;
        }
    public static function addTask($task) {
      // self::$tasks = $task;  
      session_start();
      if (!isset($_SESSION['tasks'])){
        $_SESSION['tasks']=[];

      }
      $_SESSION['tasks'][]=$task;
    }
}    
    