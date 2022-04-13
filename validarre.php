<?php
/*
include('conexion.php');
$conexion=mysqli_connect("localhost","root","","mercado");
/*$nombre=$_POST['nombre'];*
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$rol=$_POST['rol'];

$consulta="INSERT INTO `usuarios` (`Usuario`, `Contraseña`,`id_rol`)
VALUES ('$usuario', '$contraseña', '$rol');";

$resultado=mysqli_query($conexion,$consulta);

/*$filas=mysqli_fetch_array($resultado);*

if($resultado){
  
  header("location:login.php");

  echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='login.php' </script>";

}else{

  echo "<script> alert('Error al registrar o faltan datos'); window.location='registro.php' </script>";
  /*  ?>
    <?php
    include("registro.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php*
}*/

/////////////////////
require 'conexion.php';

$cor = $_POST['correo'];
$contr = $_POST['contraseña'];

$nomb = $_POST['nombre'];
$apep = $_POST['apellidop'];
$apem = $_POST['apellidom'];
$tel = $_POST['telefono'];

$call = $_POST['calle'];
$numin = $_POST['numi'];
$numex = $_POST['nume'];
$coll = $_POST['colonia'];
$ciud = $_POST['ciudad'];
$esta = $_POST['estado'];

$coord = $_POST['coordenas'];

$insertar = "INSERT INTO usuarios (Usuario,Contraseña,id_rol) VALUES ('$cor','$contr','2') ";

$query = mysqli_query($conexion, $insertar);
$ultid = mysqli_insert_id($conexion);

$insertar = "INSERT INTO productor (Nombre,Apellidopaterno,Apellidomaterno,Telefono,id_usuario) VALUES ('$nomb','$apep','$apem','$tel','$ultid') ";

$query = mysqli_query($conexion, $insertar);
$ultiid = mysqli_insert_id($conexion);

$insertar = "INSERT INTO direccion (Calle,Numinter,Numext,Colonia,Ciudad,Estado,id_productor) VALUES ('$call','$numin','$numex','$coll','$ciud','$esta','$ultiid') ";

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