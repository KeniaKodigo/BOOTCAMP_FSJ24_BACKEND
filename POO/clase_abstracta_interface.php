<?php

abstract class Animal{
    //puede tener atributos, metodos
    public $nombre;
    public $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    //metodo abstracto que solo declaramos
    public abstract function hacerSonido(); //metodo obligatorio para las clases hijas

    // public abstract function comer();
}

//solo sirven para heredar su contenido

class Gato extends Animal{

    public function hacerSonido()
    {
        return "Los gatos hacen miau";
    }
}

class Perro extends Animal{
    public function hacerSonido()
    {
        return "Los perros hacen wuauf";
    }
}

$gato = new Gato("Papucho",5);
print_r($gato);
echo "<br>Llamando el metodo<br>";
echo $gato->hacerSonido();


//INTERFACES
interface Animales{
    //metodos sin comportamiento, solamente son obligatorios
    public function hacerSonido();
    public function comer();
}

interface Mamifero{
    public function mamifero();
}

class Conejo implements Animales, Mamifero{
    public function hacerSonido()
    {
        //code
    }

    public function comer()
    {
        return "El conejo come zanahorias";
    }

    public function mamifero()
    {
        //code..
    }
}

$conejo = new Conejo();
$conejo->comer();