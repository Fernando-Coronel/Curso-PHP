<?php
//17. Funciones

function imprimirNombre($nombre, $apellido=""){//el igual mas la cadena vacia hace que la variable apellido no sea forzosa ingresar.

    //Instrucciones
    echo "Hola ".$nombre." ".$apellido."<br/>";
}

imprimirNombre("Fernando", "Coronel");//asi se manda a llamar la funcion o se manda a ejcutar la funcion.

imprimirNombre("Elena", "Frias");
imprimirNombre("Fati", "Cruz");
imprimirNombre("Leonel", "Cruz");
imprimirNombre("Olivia");

?>