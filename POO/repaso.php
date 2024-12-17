<?php
//abstraccion, encapsulamiento, polimorfismo y herencia
class Usuario{
    //public, protected, private
    public $nombre;
    protected $correo; //se utiliza dentro de la clase y clases hijas
    private $password; //se utiliza dentro de la clase

    public function __construct($name, $email)
    {
        $this->nombre = $name;
        $this->correo = $email;
        $this->password = "Kodigo";
    }

    public function registrarUsuario(){
        //code...
        echo "Hola";
        //base de datos
        $this->correo;
    }

    public function cambiarPassword(){
        //code..
        $this->registrarUsuario(); //Hola

    }
}

//queremos crear un usuario
$usuario = new Usuario("Juan Perez", "juan@gmail.com"); //objeto de tipo Usuario
//usuario esta vacio
$usuario->nombre = "Maria";

class UsuarioBecado extends Usuario{
    public function obtenerUsuario(){
        $this->correo;
    }
}