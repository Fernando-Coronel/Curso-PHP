<?php
//Programacion Orientada a Objetos
// 26. Constructor = s una función que podemos llamar al mismo tiempo que instanciamos un objeto.

class persona{

    public $nombre;//Propiedades de la clase persona
    private $edad;
    protected $altura;

    function __construct($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){// Aqui se estan creando acciones o metodos

        $this->nombre=$nuevoNombre; 

    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

$objAlumno= new persona("Fernando"); //se esta creando un objeto o instancia y al mismo tiempo le asignamos un metodo
// $objAlumno->asignarNombre("Fernando");//Aqui se le esta asignando un metodo
$objAlumno->imprimirNombre();


?>