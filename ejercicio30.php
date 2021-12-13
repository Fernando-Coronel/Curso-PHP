<?php
//30. Variables de session

session_start();

$_SESSION["usuario"]="Fernando";
$_SESSION["estatus"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

?>