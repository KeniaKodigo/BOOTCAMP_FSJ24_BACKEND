<?php

//llamando un archivo en php
require_once "./clases/Bootcamp.php";

class INCAF extends Bootcamps{
    public $institucion;

    public function __construct($nombre, $coach, $institucion)
    {
        //podemos heredar el constructor padre
        parent::__construct($nombre, $coach);
        $this->institucion = $institucion;
    }

    public function temario_bootcamp($modulo = null)
    {
        if($modulo == 1){
            $temario = ["HTML","CSS","GIT"];
            echo "Temario del MODULO 1 INCAF";
        }else{
            $temario = ["HTML","CSS","GIT","JAVASCRIPT","react","PHP"];
            echo "Temario de todos los modulos INCAF";
        }
    }
}