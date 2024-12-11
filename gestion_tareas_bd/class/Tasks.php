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
                echo "Se ha registrado correctamente";
            }

        }catch(PDOException $e){
            echo "Error al registrar una tarea: " . $e->getMessage();
        }
    }
}