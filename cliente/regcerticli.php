<?php
session_start();
require '../conexion.php';

/*$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
	header("Location: ../login.php");
}*/

//$sql = ("SELECT id, id_usuarios FROM usuarios u INNER JOIN ahorro a WHERE u.id=a.id_usuarios",$conectar);

$unir = "SELECT u.id, u.Usuario, u.Contraseña, u.id_rol, c.idcertificacion, c.Numcert, c.Fechaven, c.Certificadoraem, c.Alcance, c.id_usuarioo 
FROM usuarios u INNER JOIN certificacion c ON u.id = c.id_usuarioo WHERE id = '".$usuario."'";
$verificar = $conexion->query($unir);
$separar = $verificar->fetch_array();

$usuario= $_SESSION['id'];

$num = $_POST['numero'];
$venc = $_POST['vencido'];
$emp = $_POST['empresa'];
$alc = $_POST['alcance'];

$insertar = "INSERT INTO certificacion (Numcert,Fechaven,Certificadoraem,Alcance,id_usuarioo) VALUES ('$num','$ven','$emp','$alc','".$usuario."') ";
$query = mysqli_query($conexion, $insertar);


// && $insertar1 && $insertar2
if($query){

  echo "<script> alert('correcto');
   location.href = 'certificadocli.php';
  </script>";

}else{
   echo "<script> alert('incorrecto');
   location.href = 'regiscertificli.php';
   </script>";
}



?>