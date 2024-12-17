<?php
require_once "./class/Conection.php";

class Authentication{

    public static function login($email){
        //crear una consulta para verificar si el usuario existe
        $pdo = Conection::connect();
        $query = $pdo->prepare("SELECT id_user, name, email FROM users WHERE email = :email");
        $query->bindParam(':email', $email);
        $query->execute(); //true, false

        $user = $query->fetch(PDO::FETCH_ASSOC); //arreglo asociativo (1 registro)
        /** [
         * id_user => 1
         * name => christian]
         * user.name
         * user['name']
         */

        if($user){
            //crear sesiones para el usuario
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['user'] = $user['name'];

            //redigirnos a una vista
            header("location: list_task.php");
        }else{
            echo "Credenciales Incorrectas";
        }
    }   

    public static function logout(){
        //iniciar sesion
        session_start();

        //destruir la informacion del usuario
        session_destroy();

        //destruir las variables de las sesiones
        session_unset();
        header("location: index.php");
        exit;
    }

    //verificando si la sesion existe
    public static function verifySession(){
        session_start();

        if(!isset($_SESSION['id_user'])){
            header("location: login.php?error=Debes iniciar sesion");
            exit;
        }
    }
}