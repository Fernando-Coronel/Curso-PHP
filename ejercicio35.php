<?php
//35. Consumir un API

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

$opciones= array("ssl"=>array("verify_peer"=>false,"verify_peer_name"=>false));//se utiliza para desactivar la compatibilidad para que nos deje leer la informacion.

$respuesta=file_get_contents($url, false,stream_context_create($opciones));//Esta función file_get_contents es la forma preferida de leer el contenido de un archivo en una cadena. Utilizará técnicas de asignación de memoria, si el servidor lo admite, para mejorar el rendimiento.
//stream_context_create: esta funcion sirve para desactivar la restrinccion con el https y poder leer el contenido.

$objRespuesta= json_decode($respuesta);

// print_r($objRespuesta);

foreach($objRespuesta->list as $video){
    
    //print_r($video->title);
    //print_r($video->channel);
}

?>
<ul>
    <?php foreach($objRespuesta->list as $video){ ?>
    <li><?php echo ($video->title); ?> | <?php echo ($video->channel); ?> </li>
    <?php } ?>
</ul>