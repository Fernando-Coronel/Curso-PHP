<?php
//28. Conexion PHP con base de datos

//Datos de conexion al servidor
$servidor="localhost";// 127.0.0.1 direccion del localhost.
$usuario="root";
$password="";

try{

    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);// Clase con la cual nos va a permitir conectarnos a la base de datos.
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//con esto se activan unas caracteristicas propias de la conexion.

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";
    $conexion->exec($sql);// Se utiliza para insertar la base de datos    

    echo "Conexion Establecida";

}catch(PDOException $error){//sirve para mostrar un error si es que no hay conexion con la base de datos.
    echo "Conexion Erronea".$error;
}

?>