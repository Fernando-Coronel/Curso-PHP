<?php
//39. Escritura de archivos

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, Saludos!";

$archivoCrear= fopen($nombreArchivo, "w");

fwrite($archivoCrear, $contenidoArchivo);//fwrite sirve para escribir dentro del archivo

fclose($archivoCrear);//Se debe cerrar para que se pueda leer el archivo

?>