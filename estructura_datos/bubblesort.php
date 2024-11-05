<?php


function bubblesort($array){
    //code..
    //ciclo que verifica si tengo que volver a entrar al segundo bucle
    $contador = 0;
    $segundo_contador = 0;
    for($i = 0; $i < count($array); $i++){
        $contador++;
        //segundo ciclo itera los elementos y hace los intercambios
        for($j = 0; $j < count($array) - 1; $j++){
            /**
             * $j = 0
             * $j + 1 = 1
             */
            $segundo_contador++;
            if($array[$j] > $array[$j + 1]){
                //intercambio

                //variable que captura la posicion j + 1
                /**
                 * $temporal = 12, 4
                 * $array[$j + 1] = 23, 45
                 * $array[$j] = 12, 4
                 * [12,23,45,4,33,10]
                 * [12,23,4,45,33,10]
                 */
                $temporal = $array[$j + 1];
                $array[$j + 1] = $array[$j];
                $array[$j] = $temporal;
            }
        }
    }
    echo "Contador Primer Bucle<br>";
    echo $contador . "<br>";
    echo "Contador Segundo Bucle<br>";
    echo $segundo_contador;
    echo "<br>";
    print_r($array);
}


bubblesort([23,12,45,4,33,10]);