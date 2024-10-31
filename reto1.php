<?php

function createMagicPotion($potions, $target) {
    $suma = 0;
    $arreglo_posiciones = [];
    for($i = 0; $i < count($potions) - 1; $i++){
        // echo $potions[$i] . "+" . $potions[$i + 1] . "<br>";
        $suma = $potions[$i] + $potions[$i + 1];
        if($target == $suma){
            //array_push($arreglo_posiciones, $i, $i+1);
            $arreglo_posiciones[] = $i;
            $arreglo_posiciones[] = $i + 1;
        }
    }

    //verificar arreglo esta vacio
    if(count($arreglo_posiciones) > 0){
        return $arreglo_posiciones;
    }else{
        return "Indefenido";
    }
}

print_r(createMagicPotion([1, 2, 3, 4], 5)); //[2,3]

//bublesort (metodo burbuja)

?>