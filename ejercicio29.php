<?php
//29. Leer y recorrer datos de mysql con php

//Datos de conexion al servidor
$servidor="localhost";// 127.0.0.1 direccion del localhost.
$usuario="root";
$password="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);// Clase con la cual nos va a permitir conectarnos a la base de datos.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//con esto se activan unas caracteristicas propias de la conexion.

    $sql="SELECT * FROM `fotos`";//Forma para consultar datos de la base de datos
    $sentencia=$conexion->prepare($sql);//Preparar la seleccion de datos
    $sentencia->execute();//Ejecuta la seleccion de datos
    
    $resultado=$sentencia->fetchAll();//Para obtener los datos


    print_r($resultado);

    foreach($resultado as $foto){//Para poder leer los resultados o recorrerlos.
        
        echo $foto['nombre']."<br/>";
    }

    echo "Conexion Establecida";

}catch(PDOException $error){//sirve para mostrar un error si es que no hay conexion con la base de datos.
    echo "Conexion Erronea".$error;
}

?>