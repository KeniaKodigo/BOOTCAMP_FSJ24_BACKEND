<?php

abstract class NivelCursos{
    public $titulo;
    public $descripcion;
    public $temario;

    //por lo menos debe haber un metodo obligatorio
    public abstract function getDuration();
}

class CursoBasico extends NivelCursos{

    public function getDuration()
    {
        return 30;
    }
}

class CursoIntermedio extends NivelCursos{

    public function getDuration()
    {
        return 45;
    }
}

class CursoAvanzado extends NivelCursos{

    public function getDuration()
    {
        return 60;
    }
}