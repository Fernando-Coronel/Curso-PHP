<?php
//38.Abrir un archivo en PHP

$archivo="contenido.txt";

$archivoAbierto=fopen($archivo,"r");//fopen sirve para abrir un archivo

$contenido=fread($archivoAbierto,filesize($archivo));//fread es para leer el archivo

echo $contenido;

?>