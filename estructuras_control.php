<?php

//ESTRUCTURAS DE CONTROL
/**
 * Estructuras condicionales = if-else, if-elseif-else, switch
 * Estructuras repetitivas = for, while, do while
 */

function terminarNumero($numero){
    //residuo
    // if($numero % 10 == 4){
    //     echo "Tu numero termina en 4<br>";
    // }else{
    //     echo "NO termina en 4<br>";
    // }

    //operador ternario
    echo $numero % 10 == 4 ? "Tu numero termina en 4<br>" : "NO termina en 4<br>";
}

function terminarNumeroV2($numero){
    //convertir una cadena  a un arreglo
    $arreglo = explode(",",$numero);
    //[4,5,4]
    //end = metodo que devuelva la ultima posicion del arreglo
    $ultima_posicion = end($arreglo); //"4"
    if($ultima_posicion == 4){
        echo "Tu numero termina en 4<br>";
    }else{
        echo "NO termina en 4<br>";
    }
}

//454 -> [4,5,4]
//[4,5,4] -> 454 (implode)
terminarNumero(454);
terminarNumero(100);
terminarNumeroV2("4,5,4");
terminarNumeroV2("1,0");


function impuesto($precio){
    if($precio > 0 && $precio <= 20){
        echo "No genera impuesto";
    }else if($precio > 20.01 && $precio <= 40){
        echo "Tienes el 30% de impuesto";
    }else if($precio > 40.01 && $precio <= 500){
        echo "Tienes el 40% de impuesto";
    }else{
        echo "Tienes el 50% de impuesto";
    }
}
impuesto(120);

function vehiculo($tipo){
    switch($tipo){
        case "Vehiculo Particular":
            echo "Vas a pagar 0.75";
            break;
        
        case "Microbus":
            echo "Vas a pagar 1.25";
            break;

        case "Moto":
            echo "Vas a pagar 0.30";
            break;
        
        default:
            echo "Vas a pagar $3.00";
    }
}
echo "<br>";
vehiculo("Moto");


//Repetitivas: for, while, do while

//1 al 100
function contador(){
    for($i = 1; $i <= 100; $i++){
        echo $i . "<br>";
    }
}

//contador();

//100 al 1
function contadorAlReves(){
    //while
    $contador = 100;
    while($contador >= 1){
        echo "contador: " . $contador . "<br>";
        $contador--;
    }
}

contadorAlReves();

//do while
function calcularMedia($array){
    //saber la media: suma de los numeros / la cantidad de numeros
    $i = 0;
    $suma = 0;
    /***
     * 
     */
    do{
        $suma += $array[$i];
        $i++;
    }while($i < count($array));

    $media = $suma / count($array);
    echo "La media del arreglo es: " . $media;
}

calcularMedia([23,45,34,12]); //0,1,2,3

/**
 * strlen() => devuelve la longitud de una cadena
 * count() => devuelve la longitud de un arreglo
 */

?>



