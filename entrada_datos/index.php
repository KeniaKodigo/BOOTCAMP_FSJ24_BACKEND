<?php 
    echo "hola php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Datos FSJ24a</h1>

    <form action="./function.php" method="POST">
        <label for="">Nombre</label>
        <input type="text" id="nombre" class="name" name="student">

        <label for="">Correo</label>
        <input type="text" name="email">

        <button type="submit">Enviar Datos</button>
    </form>

<!-- 
    Peticiones HTTP
    GET => la informacion en la url
    POST
-->

</body>
</html>