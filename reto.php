<?php
function createMagicPotion($potions, $target) {
    $length = count($potions);
    
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            echo $potions[$i] . "+" . $potions[$j] . "<br>";
            // if ($potions[$i] + $potions[$j] === $target) {
            //     return [$i, $j];
            // }
        }
    }
    
    //return "null"; // Devuelve null si no se encuentra ninguna combinación
}
// Pintando
$potions = [1, 2, 3, 4];
$target = 5;
print_r(createMagicPotion($potions, $target)); // Devuelve 0


function createMagicPotion2(array $potions, int $target) {
    $result = null; // Ponemos primero el result en null
    foreach ($potions as $i => $ingredient1) { // Recorremos en el primer bucle el arreglo y guardamos en $ingredient1 para que no se pierda el valor
        foreach (array_slice($potions, $i + 1) as $ingredient2) { // iteramos los demas valores del arreglo y le sumamos 1 para evitar que se repita la combinación 
            if ($ingredient1 + $ingredient2 === $target) { // Verificamos si lo que sumamos es igual al target
                $result = [$ingredient1, $ingredient2]; // vamos a guardar en el result los valores que sumados hacen el target
            }
        }
    }
    return $result ?? 'undefined'; // devolvemos el ultimo result o ponemos 'undefined' si no nos dio nada
}
print_r(createMagicPotion2([4, 4, 0, 8], 8)); //Muestro el resultado con print_r
?>