<?php

//verificar que el arreglo este ordenado
function busqueda_binaria($array, $value){
    $inicio = 0;
    $fin = count($array) - 1;
    while($inicio <= $fin){
        $posicion_medio = intval(($inicio + $fin) / 2); //4

        if($array[$posicion_medio] == $value){
            return $posicion_medio;
        }

        if($array[$posicion_medio] > $value){
            $fin = $posicion_medio - 1;
        }else{
            $inicio = $posicion_medio + 1;
        }
    }

    return -1;
}

$results = busqueda_binaria([1,3,4,5,7,9], 100);
if($results != -1){
    echo "El elementos se encontro en la posicion $results<br>";
}else{
    echo "No se encontro el elemento<br>";
}