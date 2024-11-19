<?php


class Calculadora{
    public static $c;
    public $d;

    public static function sumar($a, $b){
        //llamando un atributo estatico

        return $a + $b + self::$c;
    }

    public function restar($a, $b){
        // $this->sumar(12,11);
        return $a - $b - $this->d;
    }
}

#crear una instancia
$calculadora = new Calculadora();
echo $calculadora->sumar(110,5);
echo "<br>";
$calculadora2 = new Calculadora();
echo $calculadora2->sumar(10,300);
echo "<br>";
#Llamando al metodo estatico
echo Calculadora::sumar(110, 5);
echo Calculadora::sumar(10, 300);
// echo Calculadora::restar(100, 69);
Calculadora::$c;