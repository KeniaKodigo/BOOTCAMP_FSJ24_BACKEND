<?php


function insertionSort($array){
    for($i=0; $i < count($array); $i++){
        /**
         * [23,12,45,4,33,10]
         * [12,23,45,4,33,10]
         * 
         */
        $punto_interseccion = $array[$i]; //23, 12
        //j sera la variable donde retrocedamos a una posicion
        $j = $i - 1; //-1, 0
        while($j >= 0 && $punto_interseccion < $array[$j]){
            //intercambios
            $array[$j + 1] = $array[$j];
            $array[$j] = $punto_interseccion;

            $j = $j - 1; //-1
        }
    }

    return $array;
}

print_r(insertionSort([23,12,45,4,33,10]));