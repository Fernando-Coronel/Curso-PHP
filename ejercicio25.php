<?php
//Programacion Orientada a Objetos
// 25. Herencia = es la extension de una clase o Heredar las propiedades de una clase

use persona as GlobalPersona;

class persona{

    public $nombre;//Propiedades de la clase persona
    private $edad;//Visibilidad de datos
    protected $altura;//Visibilidad de datos

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


class trabajador extends persona{// el extends es lo que va a heredar de la clase persona a la clase trabajador.

    public $puesto;//Propiedad nueva
    public function PresentarComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}


$objTrabajador= new trabajador(); //se esta creando un objeto o instancia
$objTrabajador->asignarNombre("Fernando");//Aqui se le esta asignando un metodo
$objTrabajador->puesto="Programador";

$objTrabajador->PresentarComoTrabajador();

?>