<?php
// 32. Valores input file y Guardar archivo.

if($_POST){
    print_r($_POST);

    print_r($_FILES['archivo']['name']);//para obtener mas datos del archivo primero va el parametro $_FILES enseguida en corchetes el name del archivo y despues en corchetes el dato que queremos obtener.

    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);// este codigo sirve para cuando se obtenga el archivo se va copiar o guardar dentro de la carpeta que estamos trabajando y se va a guardar con el nombre original.
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
    <form action="ejercicio32.php" enctype="multipart/form-data" method="post"> 
        <!-- el parametro multipart/form-data permite activar la compatibilidad para djuntar una imagen y asi solo obtenemos los datos del archivo. -->
    Imagen:
    <input type="file" name="archivo" id="">
    <br/>
    <input type="submit" name="enviar" value="Enviar Informacion">

    </form>
</body>
</html>