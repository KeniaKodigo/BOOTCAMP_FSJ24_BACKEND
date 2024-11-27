<?php


//intermediario
interface Usuario{
    public function perfilUsuario();
}

class Estudiante implements Usuario{
    public $nombre;
    public $carnet;

    public function __construct($nombre, $carnet)
    {
        $this->nombre = $nombre;
        $this->carnet = $carnet;
    }

    public function perfilUsuario()
    {
        echo "Soy un estudiante";
    }
}

class Profesor implements Usuario{
    public function perfilUsuario()
    {
        echo "Soy un profesor";
    }
}

class ProfesorInvitado implements Usuario{
    public function perfilUsuario()
    {
        echo "Soy un profesor invitado";
    }
}

class GestorInscripcion {
    private Usuario $usuario;

    public function __construct(Usuario $usuario) {
        $this->usuario = $usuario;
    }
}

$estudiante = new Estudiante("Kenia","KP2024");
$profesor_oscar = new Profesor();

$inscripcion = new GestorInscripcion($estudiante);
$inscripcion = new GestorInscripcion($profesor_oscar);
print_r($inscripcion);