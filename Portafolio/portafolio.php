<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
    //print_r($_POST);

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_FILES['archivo']['name'];

    $fecha = new DateTime();

    $imagen= $fecha->getTimestamp()."_" .$_FILES['archivo']['name'];

    $imagen_temporal= $_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"imagenes/".$imagen);

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");//redirecciona al portafolio una vez que ejecuta el codigo.
}

if ($_GET) {

    $id = $_GET['borrar'];
    $objConexion = new conexion();

    $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']); //unlink es una funcion que permite un borrar

    $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =".$id;
    $objConexion->ejecutar($sql);
    header("location:portafolio.php");


    //print_r($proyectos);
}

$objConexion = new conexion();
$proyectos = $resultado = $objConexion->consultar("SELECT * FROM `proyectos`");

?>
<br />
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">

                        Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
                        <br />
                        Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
                        <br />
                        Descripcion:
                        <textarea required class="form-control" name="descripcion" id="" cols="30" rows="3"></textarea>
                        <br />
                        <button class="btn btn-success" type="submit">Enviar Proyecto <i class="fas fa-share-square"></i></button>
                    </form>
                </div>
                <div class="card-footer text-muted">

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyectos as $proyecto) { ?>
                        <tr>
                            <td><?php echo $proyecto['id']; ?></td>
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td>
                            <img width="150" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="">
                            
                                </td>
                                <td><?php echo $proyecto['descripcion']; ?></td>
                                <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar <i class="fas fa-trash"></i></a></td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td scope="row"></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br />



<?php include("pie.php"); ?>