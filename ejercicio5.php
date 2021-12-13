<?php
// 4.- String y concatenacion
if($_POST){

    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];

    echo "Hola ".$txtNombre." ".$txtApellido; //El string es el texto que se va imprimir y el punto que sigue es la concatenacion de lo que contiene la variable txtNombre y la variable txtApellido que es lo que se esta enviando desde el formulario.
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio5.php" method="post"><br>
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    Apellido:
    <input type="text" name="txtApellido" id="">
    <br/>
    <input type="submit" value="Enviar">

    </form>
</body>
</html>