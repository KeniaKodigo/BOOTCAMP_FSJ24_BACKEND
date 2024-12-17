<?php 
    //iniciamos la sesion
    session_start();
    require_once "./class/Authentication.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['error'])){
            echo "<p>".$_GET['error']."</p>";
        }
    ?>
    <h1>Inicio de sesion</h1>
    <form action="" method="POST">
        <label for="">Correo</label>
        <input type="text" name="email">

        <label for="">Contraseña</label>
        <input type="text" name="password">

        <input type="submit" value="Iniciar Sesion">
    </form>

    <?php 
        if(isset($_POST['email'], $_POST['password'])){
            $email = $_POST['email'];
            Authentication::login($email);
        }
    ?>
</body>
</html>