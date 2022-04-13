<?php
include_once("../conexion.php");
 
$cod = $_GET['id'];
 
mysqli_query($conexion, "DELETE FROM usuarios WHERE id=$cod");
 
header("Location:index.php");

?>

<?php
/*include_once("../conexion.php");
 
$id = $_REQUEST['id'];
$query = "DELETE FROM usuarios WHERE id='$id'";
$resultado = $conexion->query($query);
if($resultado){
    header("location: usuarioadmi.php");
}
else{
    echo "hubo un problema al eliminar";
}*/

?>