<?php

//bootcamp becados, bootcamp normales
class Bootcamp{
    //atributos
    public $nombre; //tipo de alcance: se va acceder global (dentro de la clase, fuera de la clase, clases hijas)
    protected $coach; //tipo de alcance: dentro de la clase y clases hijas
    private $duracion; //tipo de alcance: solamente hay acceso dentro de la clase

    //metodo especial: constructor
    /**
     * Se ejecuta de manera automatica cuando creamos una instancia de la clase y nos permite inicializar un objeto.
     * 
     * Tipos de constructores
     * - constructor por defecto
     * - constructor parametrizado
     */
    public function __construct($nombre, $coach)
    {
        // $this->nombre = "Bootcamp FSJr";
        // $this->coach = "Oscar Lemus";
        // $this->duracion = "6 meses";
        $this->nombre = $nombre;
        $this->coach = $coach;
        $this->duracion = "6 meses";
    }

    //metodos
    public function temario_bootcamp(){
        $temario = ["POO","SOLID","Base de datos"];
        // echo $temario;
        // $this->coach;
        echo "Temario del Modulo 5 POO<br>";
    }

    /**
     * Para los atributos privados creamos los metodos getter y setter
     * (get y set)
     */

    #retorna el atributo
    public function getDuracion(){
        return $this->duracion;
    }

    /**
     * recibir y actualizar el atributo
     */
    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
}

#creando un objeto de la clase
#Instancia de una clase (new)
//constructor por defecto esta vacio
$fsj24 = new Bootcamp("FSJ24A","Kenia Paiz");
$fsj24->nombre = "FullStack Jr 24A";
// $fsj24->temario_bootcamp();
print_r($fsj24);
echo "<br>";
$fsj25 = new Bootcamp("FSJ25","Jairo Vega");
// $fsj25->coach = "Karla";
// $fsj25->duracion = "8 meses";
print_r($fsj25);


class INCAF{

}

#Creando una clase hija
/**
 * 
 */
class BootcampINCAF extends Bootcamp{
    public $institucion;

    public function __construct($nombre, $coach, $institucion)
    {
        //podemos heredar el constructor padre
        parent::__construct($nombre, $coach);
        $this->institucion = $institucion;
    }

    //cambiamos el comportamiento
    public function temario_bootcamp()
    {
        $temario = ["javascript","react","taller de scrum","taller de git","applaudo"];
        echo "Temario del INCAF";
        
    }
}
echo "<br>";
$incaf = new BootcampINCAF("incaf-fsj14","karla lopez","Gobierno SV");
$incaf->setDuracion("6.5 meses");
echo $incaf->getDuracion();
echo "<br>";
print_r($incaf);