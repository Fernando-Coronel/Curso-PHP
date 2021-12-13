<?php
//22.Arreglos Asociativos

$frutas=array("F"=>"Fresa", "M"=>"Manzana", "P"=>"Pera");//para cambiar el indice de un array antes de un elemento que esta en el arreglo se le pone entre comillas ya sea la primera o ultima letra con la cual se va a identificar el elemento y en seguida se le agrega el signo igual y el mayor que.

print_r($frutas);


//Leer o recorrer un arreglo
echo $frutas["F"]."<br/>";//La letra que esta adentro de los corchetes es el indice que quieres imprimir del arreglo.primero se pone la variable del arreglo y junto se ponen los corchetes y dentro de los corchetes se pone el indice o indices que se quiera imprimir o leer del arreglo.

foreach($frutas as $indice=>$valor){//es una de las formas que se utiliza para recorrer un arreglo con el ciclo ForEach. Primero se pone el ciclo foreach seguido de los parentesis y dentro de los parentesis se pone primero la variable donde tiene el array $array y despues as(como) $indice y despues se le asigna un valor.
    
echo "El valor ".$valor." Tiene el indice: ".$indice."<br/>";
}

?>