<?php

include('conexion.php');
$conexion=mysqli_connect("localhost","root","","mercado");
/*$nombre=$_POST['nombre'];*/
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$rol=$_POST['rol'];

$consulta="INSERT INTO `usuarios` (`Usuario`, `Contraseña`,`id_rol`)
VALUES ('$usuario', '$contraseña', '$rol');";

$resultado=mysqli_query($conexion,$consulta);

/*$filas=mysqli_fetch_array($resultado);*/

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
  <?php*/
}

?>