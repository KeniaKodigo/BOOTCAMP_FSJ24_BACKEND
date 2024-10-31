<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "./nav.php" ?>
    <form action="" method="POST">
        <label for="">Cantidad de impresoras</label>
        <input type="text"  name="cantidad">

        <label for="">Selecciona Forma de Pago</label>
        <select name="forma_pago" id="">
            <option value="efectivo">efectivo</option>
            <option value="tarjeta de credito">tarjeta de credito</option>
            <option value="vale">vale</option>
        </select>
        <button type="submit">Enviar Datos</button>
    </form>
    <?php 
        require "./main.php";
        //evalua tu codigo y si esta mal devuelve fatal error y la ejecucion se detiene


        /**
         * include: evalua tu codigo y si esta mal devuelve un warning y se sigue ejecutando
         * require
         * include_once
         * require_once
         */
        //capturando la entrada de datos
        //isset => (verifica si algo esta definido, vacio)
        if(isset($_POST['forma_pago'], $_POST['cantidad'])){
            $tipo_pago = $_POST['forma_pago'];
            $cantidad_impresoras = $_POST['cantidad'];
            detalleImpresoras($tipo_pago, $cantidad_impresoras);
        }
    ?>

    <?php include "./nav.php" ?>
    <?php include "./nav.php" ?>
</body>
</html>