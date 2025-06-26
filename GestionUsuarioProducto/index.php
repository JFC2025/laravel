<?php

require_once 'usuarios/Usuario.php';
require_once 'productos/Producto.php';

use App\Usuarios\Usuario;
use App\Productos\Producto;

$usuario = new Usuario("Francis");
$producto = new Producto("Telefono");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario y Producto</title>
    <style>
        body {
            background-color: #f9f9f9;
            font-family: monospace;
            text-align: center;
            padding: 40px;
        }
        .ascii-art {
            font-size: 18px;
            color: #0066cc;
            white-space: pre;
            line-height: 1.1;
            margin-bottom: 40px;
        }
        .mensaje-usuario {
            color: red;
            font-size: 24px;
        }
        .mensaje-producto {
            color: green;
            font-size: 32px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Esto es una presentación</h1>

<div class="ascii-art">
<?= <<<ASCII
██╗  ██╗ ██████╗ ██╗      █████╗ 
██║  ██║██╔═══██╗██║     ██╔══██╗
███████║██║   ██║██║     ███████║
██╔══██║██║   ██║██║     ██╔══██║
██║  ██║╚██████╔╝███████╗██║  ██║
╚═╝  ╚═╝ ╚═════╝ ╚══════╝╚═╝  ╚═╝
ASCII;
?>
</div>

<p class="mensaje-usuario">
    <?= $usuario->saludar(); ?>
</p>

<p class="mensaje-producto">
    <?= $producto->mostrar(); ?>
</p>

</body>
</html>
