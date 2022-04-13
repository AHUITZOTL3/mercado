<?php 

$conexion = mysqli_connect("localhost","root","","mercadoo");

    if($conexion->connect_errno)
    {
        echo "No hay conexión: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }


?>
