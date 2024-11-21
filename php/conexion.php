<?php
    $server = "localhost";
    $user="root";
    $pass ="";
    $db ="mramor";
    $conexion = new mysqli($server,$user,$pass,$db);
    if($conexion->connect_error){
        die("No se pudo conectar");
    }
?>