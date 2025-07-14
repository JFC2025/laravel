<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        h1, h2 {
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 8px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        button[name="agregar"] {
            background-color: #2e86de;
            color: white;
        }
        button[name="eliminar"] {
            background-color: #e74c3c;
            color: white;
        }
        button[name="marcar_leido"], button[name="desmarcar_leido"] {
            background-color: #27ae60;
            color: white;
        }
        button[name="desmarcar_leido"] {
            background-color: #f39c12; /* color naranja para diferenciar */
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #2c3e50;
            color: white;
        }
        /* Filas alternadas (zebra stripes) */
        tbody tr:nth-child(odd) {
            background-color: #f7f9fc; /* muy suave */
        }
        tbody tr:nth-child(even) {
            background-color: #e9f0f7; /* un poco más fuerte */
        }
        /* Hover más fuerte */
        tbody tr:hover {
            background-color: #d0def4;
        }
        td form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Biblioteca</h1>

    <h2>Añadir nuevo libro</h2>
    <form method="POST">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="anio" placeholder="Año" required>
        <button type="submit" name="agregar">Agregar</button>
    </form>

    <h2>Lista de libros</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Leído</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?= htmlspecialchars($libro->titulo) ?></td>
                <td><?= htmlspecialchars($libro->autor) ?></td>
                <td><?= htmlspecialchars($libro->anio) ?></td>
                <td><?= $libro->leido ? '✔️' : '❌' ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $libro->id ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                    
                    <?php if (!$libro->leido): ?>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $libro->id ?>">
                            <button type="submit" name="marcar_leido">Marcar como leído</button>
                        </form>
                    <?php else: ?>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $libro->id ?>">
                            <button type="submit" name="desmarcar_leido">Desmarcar como leído</button>
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
