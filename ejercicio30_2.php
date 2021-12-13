<?php
//30.2 Destruir variables de session: Se utiliza al momento de que si el usuario esta logueado le mande cierta informacion y de no estar logueado lo redirijira a otra ruta.

session_start();
session_destroy();

echo "Se destruyo la session de usuario"


?>