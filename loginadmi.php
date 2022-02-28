<?php
session_start();
if (isset($_SESSION['usuario'])) {
    //header("Location: admin/home.php");
    header("Location: admin/admin.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion</title>
    <link rel="stylesheet" href="css/loginadmi.css">
</head>
<body>
    
<form action="validaradmi.php" method="POST">
<h2>Iniciar sesión</h2>
<input type="text" placeholder="&#128273; Usuario" name="usuario" required>
<input type="password" placeholder="&#128274; Contraseña" name="pass" required>
<input type="submit" value="Ingresar" name="btningresar">

<br>
<a href="index.php" style="float:right">Regresar</a>

</form>

</body>
</html>