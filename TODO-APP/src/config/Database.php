<?php

namespace TodoApp\Config;
//src/config/Database.php
use PDO;
use PDOException;

require_once __DIR__ . '/config_db.php';
//use Todo\config\Config_db;

//require_once__DIR__ .'config_db.php';

class Database {
    // private static $tasks = [];
    // private static $host = "localhost";
    // private static $db ="todo_app";
    // private static $user= "root";
    // private static $pass = "";
    private static $pdo = null;

    public static function connect(){
      if (self::$pdo === null) {
        $dsn ="mysql:host=" . DB_HOST .";dbname=". DB_NAME;
        try {

        self::$pdo = new PDO($dsn,DB_USER,DB_PASS);
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      } catch (PDOException $e){

        if(str_contains($e->getMessage(), 'UnKnown data'))
        {
          echo"<h3 style='color:red;'>¡ la base de datos <strong>". DB_NAME ."<strong no existe.</h3>";
          echo"<p></<a href='/todo-app/create_db.php'>crear base de datos automaticamente</a><p>";
          exit;
        }else{

           die ("Error en la conexion: " . $e->getMessage());
        }
       
    }
    
}

  return self::$pdo;


 } 
} 
    