<?php
// 33.Funcion para JSON decode

$jsonContendido='[ 
    {"nombre":"Fernando", "apellido":"Coronel"},
    {"nombre":"Fatima", "apellido":"Cruz"}
    ]';// Estes el formato JSON

    $resultado= json_decode($jsonContendido); //La función json_decode() se utiliza para decodificar o convertir un objeto JSON en un objeto PHP.

    // print_r($resultado);

    foreach($resultado as $persona){
        // print_r($persona->nombre);
        echo ($persona->nombre)." ".($persona->apellido)."<br/>"; //la flecha se utiliza para acceder a la propiedad o metodo de una variable o funcion.
    }//Aqui se recorrio el array que tiene el JSON e imprime el objeto u objetos que contenga.

?>