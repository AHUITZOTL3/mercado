<?php
require 'conexion.php';
session_start();

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];

//$q = "SELECT COUNT(*) as contar from usuarios where Usuario = '$usuario' and Contraseña = '$contraseña'";
$q ="SELECT*FROM usuarios where Usuario='$usuario' and Contraseña='$contraseña'";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);

//if ($array['contar']>0){
 // $_SESSION['username'] = $usuario;
  //header("location:paginaUsuario.php");
//}else{
  //echo "DATOS INCORRECTOS";
//}

if($array['id_rol']==1){ //administrador
  header("location:admin/home.php");
}else
if($array['id_rol']==2){ //cliente
  header("location:cliente/inicio.php");
}else
if($array['id_rol']==3){ //mercado
  header("location:mercado/iniciomer.php");
}
else{
  /*header("location:login.php");
  $mensaje="error de auntentificacion";*/
  //echo"Datos erroneos <br><a href='login.php'>Volver</a>";
  echo "<script> alert('Usuario, contraseña');window.location= 'login.php' </script>";
  /*header("Location: login.php");*/
}
/*mysqli_free_result($consulta);
mysqli_close($conexion);*/

?>