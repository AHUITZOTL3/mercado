<?php 
	session_start();
	include_once 'conexiona.php';
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['pass'];
	$sentencia = $bd->prepare('select * from administrador where 
								usuario = ? and contraseña = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: loginadmi.php');
	}elseif($sentencia->rowCount() == 1){
		$_SESSION['usuario'] = $datos->usuario;
		//$_SESSION['ID']= $row['ID'];
		header('Location: admin/admin.php');
	}
?>

