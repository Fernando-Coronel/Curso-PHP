<?php
//Programacion Orientada a Objetos
// 24. Clases = es una plantilla

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

$objAlumno= new persona(); //se esta creando un objeto o instancia
$objAlumno->asignarNombre("Fernando");//Aqui se le esta asignando un metodo

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Elena");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre."<br/>";// se esta imprimiendo una propiedad.
echo $objAlumno2->nombre;
echo $objAlumno2->mostrarEdad();

?>