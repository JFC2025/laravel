<?php

namespace TodoApp\Config;
//src/config/Database.php
use PDO;
use PDOException;


class Database {
    //private static $tasks = [];
    private static $host = "localhost";
    private static $db ="todo_db";
    private static $user= "root";
    private static $pass = "";
    private static $pdo = null;



//     public static function getTasks() {
//         session_start();
//         return isset($_SESSION['tasks']) ? $_SESSION['tasks']:[];
        
//         //return self::$tasks;
//         }
//     public static function addTask($task) {
//       // self::$tasks = $task;  
//       session_start();
//       if (!isset($_SESSION['tasks'])){
//         $_SESSION['tasks']=[];

//       }
//       $_SESSION['tasks'][]=$task;
//     }
// }    
    