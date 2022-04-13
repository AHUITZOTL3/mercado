<?php
include('conexion.php');
require 'conexion.php';

$usu = $_POST['usuario'];
$cont = $_POST['contraseña'];

$nom = $_POST['nombre'];
/*$pan = $_POST['pancarta'];*/
$pan = addslashes(file_get_contents($_FILES['pancarta']['tmp_name']));

$cal = $_POST['calle'];
$numi = $_POST['numi'];
$nume = $_POST['nume'];
$col = $_POST['colonia'];
$ciu = $_POST['ciudad'];
$est = $_POST['estado'];

$coor = $_POST['coordenas'];

$insertar = "INSERT INTO usuarios (Usuario,Contraseña,id_rol) VALUES ('$usu','$cont','3') ";

$query = mysqli_query($conexion, $insertar);
$ultid = mysqli_insert_id($conexion);

$insertar = "INSERT INTO mercadoorganico (Nombremercado,pancarta,id_usuario) VALUES ('$nom','$pan','$ultid') ";

$query = mysqli_query($conexion, $insertar);
$ultiid = mysqli_insert_id($conexion);

$insertar = "INSERT INTO ubicacion (Calle,Numint,Numext,Colonia,Ciudad,Estado,id_mercado) VALUES ('$cal','$numi','$nume','$col','$ciu','$est','$ultiid') ";
$query = mysqli_query($conexion, $insertar);

// && $insertar1 && $insertar2
if($query){

  echo "<script> alert('correcto');
   location.href = 'index.php';
  </script>";

}else{
   echo "<script> alert('incorrecto');
   location.href = 'index.php';
   </script>";
}



?>