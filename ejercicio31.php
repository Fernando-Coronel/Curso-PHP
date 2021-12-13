<?php
//31. Valores del input text, radio, checkbox, select option, textarea.

$txtNombre="";
$rdgLenguaje="";
$chkphp="";
$chkhtml="";
$chkcss="";
$lsAnime="";
$txtComentario="";


if($_POST ){
    $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";//Operador ternario. en esta linea de codigo dice que si esta definida (isset) vas asignarlo y va ser el valor $_POST=txtNombre.
    $rdgLenguaje= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";    
    $chkphp= (isset($_POST['chkphp'])=="si")?"checked":"";
    $chkhtml= (isset($_POST['chkhtml'])=="si")?"checked":"";
    $chkcss= (isset($_POST['chkcss'])=="si")?"checked":"";
    $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"";
    $txtComentario=( isset($_POST['txtComentario']))?$_POST['txtComentario']:"";

    // print_r($rdgLenguaje);
    // print_r($_POST);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
    <strong> Hola </strong>: <?php echo $txtNombre;?>
    <br/>
    <strong> Tu lenguaje es </strong>: <?php echo $rdgLenguaje;?>
    <br/>
    <strong> Estas Aprendiendo </strong>:<br/>
    - <?php echo ($chkphp=="checked")?"PHP":"";?><br/>
    - <?php echo ($chkhtml=="checked")?"HTML":"";?><br/>
    - <?php echo ($chkcss=="checked")?"CSS":"";?><br/>   
    <strong> Tu anime favorito es </strong>:
    <?php echo $lsAnime; ?>
    <?php }?>
    <strong> Tu mensaje fue </strong>:<?php echo $txtComentario; ?>

    <form action="ejercicio31.php" method="post">
        <!-- el value en el input con el codigo php se utiliza para mostrar el valor que se habia enviado a la base de datos -->
        Nombre:<br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/><br/>
        Te gusta?:<br/>
        <br/> PHP :  <input type="radio" <?php echo ($rdgLenguaje=="php")?"checked":"";?> name="lenguaje" value="php" id=""><br/>
        <br/> HTML : <input type="radio" <?php echo ($rdgLenguaje=="html")?"checked":"";?> name="lenguaje" value="html" id=""><br/>
        <br/> CSS :  <input type="radio" <?php echo ($rdgLenguaje=="css")?"checked":"";?> name="lenguaje" value="css" id=""><br/><br/>

        Estas aprendiendo...<br/>
        <br/> PHP :  <input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id="">
        <br/> HTML :  <input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id="">
        <br/> CSS :  <input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id="">
        <br/><br/>
        
        Que anime te gusta?<br/>
        <select name="lsAnime" id="">
            <option value="">[Ninguna Serie]</option>
            <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":""; ?>>Naruto</option>
            <option value="dragon" <?php echo ($lsAnime=="dragon")?"selected":""; ?>>Dragon Ball Z</option>
            <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":""; ?>>Bleach</option>    
        </select>
        <br/>
        
        Tienes alguna duda?<br/>
        <textarea name="txtComentario" id="" cols="30" rows="10">
            <?php echo $txtComentario; ?>
        </textarea>
        <br/>
        <input type="submit" value="Enviar Informacion">    
    </form>
</body>
</html>