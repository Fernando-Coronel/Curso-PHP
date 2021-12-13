<?php
//21. Arreglos (arrys).

$frutas= array("Fresa", "Pera", "Manzana");

print_r($frutas);

//Leer o recorrer un arreglo

echo $frutas[0]."<br/>";//el numero que esta adentro de los corchetes es el indice que quieres imprimir del arreglo, primero se pone la variable del arreglo y junto se ponen los corchetes y dentro de los corchetes se pone el indice o indices que se quiera imprimir o leer del arreglo.



for($indice=0; $indice<3; $indice++){// es una de las formas que se utiliza para recorrer un arreglo con el ciclo FOR
    echo $frutas[$indice]."<br/>";
}

?>