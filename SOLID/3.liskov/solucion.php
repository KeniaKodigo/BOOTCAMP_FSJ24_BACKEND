<?php

abstract class Personas{
    public $nombre;
    public $telefono;
    public $correo;
    public $nivel_academico;
}

interface AsignarHorario{
    public function assignSchedule($schedule);
}

class Profesor extends Personas implements AsignarHorario{
    public function assignSchedule($schedule)
    {
        //code..
    }
}

class Director extends Personas implements AsignarHorario{
    public function assignSchedule($schedule)
    {
        //code..
    }
}

class ProfesorInvitado extends Personas{
    
    public function disponibilidad($horarios){

    }
}