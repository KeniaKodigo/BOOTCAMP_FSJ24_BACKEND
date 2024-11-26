
<?php

interface Kodigo{
    public function registrarNotas();
    public function verNotas();
    public function enviarTareas();
    public function darClase();
}

abstract class Persona{
    public $nombre;
    public $telefono;
    public $correo;

    public function __construct()
    {
        //code..
    }

    public function informacion(){
        echo "Informacion General de la persona";
    }

    //metodo obligatorio
    public abstract function verPerfil();
}

class Estudiante implements Kodigo{
    
}

class Coach extends Persona implements Kodigo{

    public function registrarNotas()
    {
        //code..
    }

    public function verNotas()
    {
        
    }

    public function enviarTareas()
    {
        
    }

    public function darClase()
    {
        
    }

    public function verPerfil()
    {
        
    }
}