<?php 
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: admin.php');
	}

    //include_once '../conexiona.php';
	include_once '../conexion.php';
	$id2 = $_POST['id2'];
	$usuario2 = $_POST['txt2Usu'];
	$contraseña2 = $_POST['txt2Contra'];
    $idrol2 = $_POST['idrol2'];
	/*$nombre2 = $_POST['txt2Nombre'];
	$parcial2 = $_POST['txt2Parcial'];
	$final2 = $_POST['txt2Final'];*/

	$sentencia = $conexion->prepare("UPDATE administrador SET usuario = ?, contraseña = ?, id_rol = ? 
												 WHERE ID = ?;");
	$resultado = $sentencia->execute([$usuario2,$contraseña2,$idrol2, $id2]);

	if ($resultado === TRUE) {
		header('Location: admin.php');
	}else{
		echo "Error";
	}
?>