<?php

function busqueda_lineal($array, $value){
    foreach($array as $item){
        if($item == $value){
            return $item;
        }
    }
    return -1;
}

function busqueda_linealV2($array, $value){
    for($i=0; $i < count($array); $i++){
        if($array[$i] == $value){
            return $i;
        }
    }
    return -1;
}

$results = busqueda_linealV2([3,5,1,4,7,10], 1);
if($results != -1){
    echo "El elementos se encontro en la posicion $results<br>";
}else{
    echo "No se encontro el elemento<br>";
}

$busqueda = array_search(1, [3,5,1,4,7,10]);
echo $busqueda;