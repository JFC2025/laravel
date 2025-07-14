<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "biblioteca";

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    $pdo->exec("USE $dbname");

    $sql = "CREATE TABLE IF NOT EXISTS libros (
        id INT AUTO_INCREMENT PRIMARY KEY,
        titulo VARCHAR(100) NOT NULL,
        autor VARCHAR(100) NOT NULL,
        anio INT NOT NULL,
        leido BOOLEAN DEFAULT 0
    )";

    $pdo->exec($sql);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
