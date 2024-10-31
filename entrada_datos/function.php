<?php
        #Capturando informacion del formulario desde PHP
        //VARIABLES GLOBALES (VARIABLES MAGICAS)
        $name = $_POST['student'];
        $email = $_POST['email'];
        echo "<h1>EJECUTANDO DESDE LA FUNCION</h1>";
        echo "Estudiante FSJ24<br>Nombre: $name<br>Correo: $email";
?>