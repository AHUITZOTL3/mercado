<?php

//include('conexion.php');
//$conexion=mysqli_connect("localhost","root","","mercado");
/*$nombre=$_POST['nombre'];*/


/* editarrrlo*/ 
require_once("conexion.php");

if(
    isset($_POST["usuario"]) &&
    isset($_POST["contraseña"]) &&

    isset($_POST["nombre"]) &&
    isset($_POST["pancarta"]) &&

    isset($_POST["calle"]) &&
    isset($_POST["numi"]) &&
    isset($_POST["nume"]) &&
    isset($_POST["colonia"]) &&
    isset($_POST["ciudad"]) &&
    isset($_POST["estado"]) &&

    isset($_POST["coordenas"]) 
){
    $mysqli->query($conexion, "INSERT INTO ubicacion(Calle,Numint,Numext,Colonia,Ciudad,Estado) VALUES(
            '".$_POST["calle"]."',
            '".$_POST["numi"]."',
            '".$_POST["nume"]."',
            '".$_POST["colonia"]."',
            '".$_POST["ciudad"]."',
            '".$_POST["estado"]."'
        )
        ");


    $mysqli->query($conexion, "INSERT INTO usuarios(Usuario,Contraseña,id_rol,id_pro,id_mercado,id_certificado) VALUES(
        '".$_POST["usuario"]."',
        '".$_POST["contraseña"]."',
        '3',
        ".$mysqli->insert_id.",
        ".$mysqli->insert_id.",
        ".$mysqli->insert_id.") 
        ");

    $mysqli->query($conexion, "INSERT INTO mercadoorganico(Nombremercado,pancarta,id_ubicacion) VALUES(
        '".$_POST["nombre"]."',
        '".$_POST["aapellido"]."',
        '".$_POST["edad"]."',
        '".$_POST["email"]."',
        ".$mysqli->insert_id.") 
        ");
      
    $mysqli->query($conexion, "INSERT INTO grafico(Ubicacion, idubicacionn) VALUES(
        '".$_POST["coordenas"]."',
        ".$mysqli->insert_id.") 
          ");

        header("Location: index.php");
}


?>