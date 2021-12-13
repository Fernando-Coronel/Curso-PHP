<?php
//30.2 Destruir variables de session: Se utiliza al momento de que si el usuario esta logueado le mande cierta informacion y de no estar logueado lo redirijira a otra ruta.
session_start();
if( isset ($_SESSION["usuario"])){
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];
}else{
    echo "No hay datos";
}


?>