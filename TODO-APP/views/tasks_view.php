<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
</head>
<body>

    <h1>Lista de tareas</h1> 
    <form action="index.php?action=add" method="POST">
        <input type ="text" name="task" placeholder="Nueva tarea" required>
        <button type="submit">agregar</button>
    </form>
    
    <ul>
        <?php foreach($tasks as $task)  ?>
        <li><?php echo htmlspecialchars($tark->getDescription()) ?>/li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

