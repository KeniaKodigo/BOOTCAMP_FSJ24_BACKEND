<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos a PHP</h1>
    <?php   
        //utilizando echo para imprimir cadenas
        #otro comentario
        echo "<strong>Sintaxis de PHP</strong>";

        echo "<p>Inyectando HTML, desde PHP</p>";

        #TIPOS DE DATOS
        //asignando una variable
        /**
         * comentario largo...
         */
        $titulo = "PHP"; //string
        $int = 45;
        $decimales = 67.8; //double o float
        $boolean = true;
        $boolean2 = FALSE;
        $nulo = null;

        //constantes
        define("PI", 3.1416);
        echo PI;
        echo "<br>";
        const DUI = "078652-1";
        //concatenamos con el punto (.)
        echo "Numero de Identidad: " . DUI;

        #Otra forma de concatenar
        echo "<h2>Estamos viendo $titulo</h2>";

        //no se permite la concatenacion
        echo '<h2>Estamos viendo $titulo</h2>';

        //arreglos
        $frutas = ["manzanas","uvas","peras","naranjas"];
        $verduras = array("tomates","zanahorias","cebollas");

        echo "Accediendo a una fruta: $frutas[1]";

        // echo $verduras;
        /**
         * Nota: echo no imprime arreglos y objetos
         */
        echo "<br>";
        //devuelve el valor del arreglo o de la variable
        print_r($verduras);
        echo "<br>";
        //devuelve el tipo de dato, longitud y valor
        var_dump($verduras);
        var_dump($decimales);

        //objetos: entidad donde reflejamos clave y valor
        echo "<br>";
        //programacion orientada a objetos (clases)
        $animal = new stdClass();
        $animal->nombre = "Pancho";
        $animal->especie = "Felino";

        $animal2 = new stdClass();
        $animal2->nombre = "Lencho";
        $animal2->especie = "Perro";
        var_dump($animal);

        class Persona{
            public $nombre;
            public $apellido;
            public $edad;
            public $telefono;
        }

        $persona = new Persona();
        $persona->nombre = "Kenia";
        $persona->apellido ="Paiz";
        $persona->edad = 26;
        $persona->telefono = 5647834;

        $persona2 = new Persona();
        $persona2->nombre = "Celina";
    ?>
</body>
<script>
    let personas = {
        nombre: "Kenia",
        apellido: "Paiz",
        edad: 26,
        telefono: 5647834
    }

    let frutas = ["uvas","peras"];
</script>
</html>