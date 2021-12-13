<?php
//11.- IF anidado.

if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    $suma=$valorA+$valorB;// asi se realiza una suma.
    $resta=$valorA-$valorB;// asi se realiza una resta.
    $division=$valorA/$valorB;// asi se realiza una multiplicacion.
    $multiplicacion=$valorA*$valorB;// asi se realiza una division.

    echo $suma."<br/>";
    echo $resta."<br/>";
    echo $division."<br/>";
    echo $multiplicacion."<br/>";

    if($valorA==$valorB){
        echo "El valor de A es igual que el valor de B<br/>";
        if($valorA==4){
            echo "El valor es 4<br/>";
        }
        if($valorA==5){
            echo "El valor es 5<br/>";
        }
    }
    if(($valorA==$valorB) && ($valorA==4)){
        echo "El valor de A es igual a valor B y es un numero 4";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br><br>
    Valor B:
    <input type="text" name="valorB" id="">
    <br><br>
    <input type="submit" value="Calcular">
</form>

</body>
</html>