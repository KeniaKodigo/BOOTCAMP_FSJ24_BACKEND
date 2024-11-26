<?php

class Estudiante{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }
}

class GestorInscripcion {
    private Estudiante $estudiante;

    public function __construct(Estudiante $estudiante) {
        $this->estudiante = $estudiante;
    }
}

$estudiante = new Estudiante("Kenia","KP2024");

$inscripcion = new GestorInscripcion($estudiante);
print_r($inscripcion);