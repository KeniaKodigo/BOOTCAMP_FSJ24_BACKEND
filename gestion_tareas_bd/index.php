<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion Tareas</title>
</head>
<body>
    <?php 
        require_once "./class/Users.php";
        require_once "./class/Tasks.php";

        $users = Users::all(); //[arreglo de usuarios] -> iterar el arreglo
        // print_r($users);
        $tasks = Task::getTasks(); //[arreglo de tareas]
    ?>
    <main class="container">
        <h1>Gestion de Tareas</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar Tarea</button>

        <table class="table">
            <thead>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Estado</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php foreach($tasks as $task){
                    $class_status = ""; 
                    switch($task['status']){
                        case "Pendiente":
                            $class_status = 'text-danger fw-bold';
                            break;
                        case "En Proceso":
                            $class_status = 'text-warning fw-bold';
                            break;

                        case "Completada":
                            $class_status = 'text-success fw-bold';
                            break;
                    }
                ?>
                    <!-- asignar un color para cada estado -->
                     
                    <tr>
                        <td><?php echo $task['title']; ?></td>
                        <td><?php echo $task['description']; ?></td>
                        <td class="status <?php echo $class_status ?>"><?php echo $task['status']; ?></td>
                        <td><?php echo $task['name']; ?></td>
                        <td><?php echo $task['email']; ?></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalStatus<?php echo $task['id_task']; ?>">Cambiar Estado</button></td>
                    </tr>

                <!-- Modal Status -->
                <div class="modal fade" id="ModalStatus<?php echo $task['id_task']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizacion de estado</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <h4><?php echo $task['title']; ?></h4>
                            <input type="hidden" name="id_task" value="<?php echo $task['id_task']; ?>">
                            <label for="">Estado</label>
                            <select name="status" id="" class="form-control">
                                <option value="">Seleccione un estado...</option>
                                <option value="En Proceso">En Proceso</option>
                                <option value="Completada">Completada</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-dark">Guardar Tarea</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
                <?php } ?>
            </tbody>
        </table>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Tareas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <label for="">Titulo</label>
                    <input type="text" class="form-control" name="title">

                    <label for="">Descripcion</label>
                    <textarea name="description" id="" class="form-control"></textarea>

                    <label for="">Asignar Usuario</label>
                    <select name="user" id="" class="form-control">
                        <option value="">Seleccione un usuario...</option>
                        <!-- accedemos a la lista de usuarios -->
                        <?php foreach($users as $user){ ?>
                            <option value="<?php echo $user['id_user']; ?>"><?php echo $user['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Guardar Tarea</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </main>
    <?php
        //actualizando el estado de la tarea
        if(isset($_POST['id_task'], $_POST['status'])){
            $id = $_POST['id_task'];
            $status = $_POST['status'];

            Task::update_status_task($id, $status);
        }


        //Guardando la tarea
        if(isset($_POST['title'], $_POST['description'], $_POST['user'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $user = $_POST['user'];

            //instancia la clase para crear una tarea
            $task = new Task($title, $description, $user);
            $task->save();
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- <script>
    // let status = document.getElementById('status');
    let status = document.querySelectorAll('.status'); //lista de nodos
    status.forEach(element => {
        element.value == "Pendiente" ? element.style.color = "yellow" : element.style.color = "red";
    });
    
</script> -->
</html>