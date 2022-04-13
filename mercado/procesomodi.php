<?php

include("../conexion.php");

session_start();
include '../conexion.php';

$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
	header("Location: ../login.php");
}

$consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario'";
$ejecuta = $conexion->query($consulta);
$extraer = $ejecuta->fetch_assoc();

$unir = "SELECT u.id, u.Usuario, u.Contraseña, u.id_rol, m.idmercado, m.Nombremercado, m.pancarta, m.id_usuario, 
b.idubicacion, b.Calle, b.Numint, b.Numext, b.Colonia, b.Ciudad, b.Estado, b.Estado, b.id_mercado 
FROM usuarios u INNER JOIN mercadoorganico m ON u.id = m.id_usuario INNER JOIN ubicacion b ON m.idmercado = b.id_mercado WHERE usuario = '".$usuario."'";
$verificar = $conexion->query($unir);
$separar = $verificar->fetch_assoc();

/*$id = $_GET['idmercado'];
	$m = "SELECT * FROM mercadoorganico WHERE idmercado = '$id'";
	$modificar = $conexion->query($m);
	$row = $modificar->fetch_array(MYSQLI_ASSOC);*/

    $id = $_REQUEST['idmercado'];
    $nombre = $_POST['nombre'];
    $imagen = addslashes(file_get_contents($_FILES['pancarta']['tmp_name']));
    $query = "UPDATE mercadoorganico SET Nombremercado = '$nombre', pancarta = '$imagen' WHERE idmercado = '$id'";
	$resultado = $conexion->query($query);
    if ($resultado){
        header("location:mercadomer.php");
    } 
    else{
        echo "error";
    }

?>