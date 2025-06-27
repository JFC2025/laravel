<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>
<body class="bg-light py-4">
    <div class="container">

         <h1 class="text-center mb-4">Lista de tareas</h1> 

    <form  method="POST" class="mb-4">
        <div class="input-group">
            <input type ="text" name="description" class="form-control" placeholder="Nueva tarea" required>
            <button type="submit" class="btn btn-primary">agregar</button>
        </div> 
    </form>

    <table class="table table-bordered tabler-striped ">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>estado</th>
                <th>Acciones</th>
            </tr>   
        <thead>
        <tbody>
        <?php foreach($tasks as $task):  ?>
            <tr>
                <td><?php echo $task['id']?></td>
                <td class="<?php $task['completed'] ?'text-decoration-line-through text-muted':'' ?>">
               
                    <?php echo htmlspecialchars($task['description'])?></td>
                <td>
                
                <td>
                     <?php echo$tark['completed'] ? 'Hecha':'Pendiente'?>
                </td>

                <td>
                 <a href="?toggle=<?php echo $task['id']?>" class="btn btn-sm btn-warning">Cambiar estado</a>
                 <a href="?delete=<?php echo $task['id']?>" class="btn btn-sm btn-danger">Eliminar</a>
                 
                </td>
                
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>
    
    </div>
</body>
</html>

