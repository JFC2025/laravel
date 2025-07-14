<?ph
require_once dirname__DIR__ . '/src/config/config_db.php';
try
{
$pdo = new PDO("mysql:host=" . DB_HOST .";", DB_USER, DB_PASS);
Spdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo-> exec("CREATE BASEDATO IF NOT EXISTES `" .DB_NAME. "`CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

$pdo->exec("USE `". DB_NAME . "`");



$pdo->exec("CREATE TABLE IF NOT EXISTES task (
            id INT AUTO_INCREMENT PRIMARY KEY,
            description VARCHAR(255) NOTNULL,
            completed BOOLEAN NOT NU;; DEFAULT FALSE
            )");

echo "<h3 style='color: green;>base de datos y tabla creada</h3>";
echo "<p><a href='index.php'> Volver a la aplicacion </a></p> ";
} catch (PDOException $e) {
echo "<h3> error al crear la base de datos</h3>";
    
}