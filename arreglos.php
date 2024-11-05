<?php 

//TIPOS DE ARREGLOS

//Arreglo Indexado
$lenguajes = ["JavaScript","PHP","Python","Go"];
$notas = [2,6,9.4,10,7];
$notas[3]; //10

// print_r($notas);
// echo "<br>";
//Arreglos Asociativos (el index ya no existe, existe clave y valor)
$pais = [
    "pais" => "El Salvador",
    "poblacion" => 50000,
    "departamentos" => 14
];

$persona = [
    "nombre" => "Ivan",
    "edad" => 20,
    "correo" => "ivan@gmail.com"
];

$persona2 = ["Ivan",20, "ivan@gamil.com"];

$pais["poblacion"]; //50000
// print_r($pais);

//Arreglos Multidimensionales
$paises_multi = [
    [
        "pais" => "El Salvador",
        "poblacion" => 50000,
        "departamentos" => 14
    ],
    [
        "pais" => "Honduras",
        "poblacion" => 30500,
        "departamentos" => 12
    ],
    [
        "pais" => "Guatemala",
        "poblacion" => 30500,
        "departamentos" => 12
    ]
];

//json_encode = Es una funcion que convierte un arreglo a JSON
echo json_encode($paises_multi);
//json_decode = Decodifica (convierte un json a un arreglo de PHP)


// echo "<br>";
// print_r($paises_multi[1]);
// print_r($paises_multi[1]["departamentos"]);
?>