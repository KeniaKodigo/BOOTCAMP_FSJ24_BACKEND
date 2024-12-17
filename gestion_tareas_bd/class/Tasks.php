<?php
require_once "./class/Conection.php";

class Task{
    private $id;
    private $title;
    private $description;
    private $date;
    private $status;
    private $id_user;

    public function __construct($title, $description, $id_user)
    {
        $this->title = $title;
        $this->description = $description;
        $this->date = date('Y-m-d');
        $this->status = 'Pendiente';
        $this->id_user = $id_user;
    }

    //metodo para registrar una tarea
    public function save(){
        try{
            $pdo = Conection::connect();
            //preparando la consulta
            $query = $pdo->prepare("INSERT INTO task(title, description, status, date_task, id_user) VALUES (?, ?, ?, ?, ?)");

            //ejecutamos la consulta
            $result = $query->execute(["$this->title","$this->description","$this->status","$this->date", $this->id_user]);

            if($result){
                //echo "Se ha registrado correctamente";
                echo "<script>
                    window.location.href = './index.php';
                </script>";
            }

        }catch(PDOException $e){
            echo "Error al registrar una tarea: " . $e->getMessage();
        }
    }

    //metodo para obtener la informacion de las tareas y el usuario
    public static function getTasks(){
        //conexion a la bd
        $pdo = Conection::connect();

        $query = $pdo->query("select u.name, u.email, t.id_task, t.title, t.description, t.status from users u inner join task t on u.id_user = t.id_user");
        $query->execute();
        //esa informacion se retorne en un arreglo
        $array = $query->fetchAll(PDO::FETCH_ASSOC); //[]
        return $array;
    }

    //metodo para actualizar el estado
    public static function update_status_task($id_task, $new_status){
        try{
            $pdo = Conection::connect();

            $query = $pdo->prepare("UPDATE task SET status = :status WHERE id_task = :id_task");
            $query->bindParam(':status', $new_status, PDO::PARAM_STR);
            $query->bindParam(':id_task', $id_task, PDO::PARAM_INT);
            $result = $query->execute();

            if($result){
                //echo "Se actualizo el estado";
                echo "<script>
                    window.location.href = './index.php';
                </script>";
            }

        }catch(PDOException $e){
            echo "Error al actualizar el estado: " . $e->getMessage();
        }
    }

    //metodo que obtiene las tareas pendientes en base al usuario que ha iniciado sesion
    public static function get_task_by_user($id_user){
        //utilizar la session para el usuario
        $pdo = Conection::connect();
        //ejercemos la consulta "prepare" "query"
        $query = $pdo->query("SELECT * FROM task where id_user=$id_user and status = 'Pendiente'");
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC); //[]
        return $results;
    }
}