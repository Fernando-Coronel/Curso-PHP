<?php
//10.- Operadores logicos

if($_POST){
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if(($valorA != $valorB) || ($valorA > $valorB) ){
        echo "El valor de A es  que el valor de B y tambien es mayor";
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
    <form action="ejercicio10.php" method="post">
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