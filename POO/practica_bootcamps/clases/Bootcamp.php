<?php

//clase padre
abstract class Bootcamps{
    //atributos
    public $nombre; //tipo de alcance: se va acceder global (dentro de la clase, fuera de la clase, clases hijas)
    protected $coach; //tipo de alcance: dentro de la clase y clases hijas
    private $duracion; //tipo de alcance: solamente hay acceso dentro de la 

    public function __construct($nombre, $coach)
    {
        $this->nombre = $nombre;
        $this->coach = $coach;
        $this->duracion = "6 meses";
    }

    //metodos
    public abstract function temario_bootcamp();

    #retorna el atributo
    public function getDuracion(){
        return $this->duracion;
    }

    public function setDuracion($duracion){
        $this->duracion = $duracion;
    }
}