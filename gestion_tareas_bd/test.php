<?php

require_once "./class/Tasks.php";
// $db = Conection::connect();
// print_r($db);

// $users = Users::all();
// echo json_encode($users, true);

$task = new Task("Aprender PDO","Utilizar PDO para base de datos", 1);
$result = $task->save();
echo $result;