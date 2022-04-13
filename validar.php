<?php
require 'conexion.php';
session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

$q ="SELECT*FROM usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

if($array['id_rol']==1){ //administrador
  header("location:admin/home.php");
}else
if($array['id_rol']==2){ //cliente
  $_SESSION['usuario'] = $usuario;
  header("location:cliente/usuariocli.php");
}else
if($array['id_rol']==3){ //mercado
  $_SESSION['usuario'] = $usuario;
  header("location:mercado/usuariomer.php");
}
else{
  
  echo "<script> alert('Usuario, contraseña incorrectos');window.location= 'login.php' </script>";
  
}

?>
