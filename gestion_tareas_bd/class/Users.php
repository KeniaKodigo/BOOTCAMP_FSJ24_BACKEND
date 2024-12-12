<?php

require_once "./class/Conection.php";

class Users{

    //metodo para obtener todos los usuarios
    public static function all(){
        $conection = Conection::connect(); //tengo el objeto con la informacion de la bd

        //generar una consulta sql
        $query = $conection->query("SELECT id_user, name, email FROM users"); //creando la consulta
        $query->execute(); //true / false

        $result = $query->fetchAll(PDO::FETCH_ASSOC); //arreglo de datos
        return $result;

    }
}