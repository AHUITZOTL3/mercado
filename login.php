<?php
session_start();
if (isset($_SESSION['usuario'])) {
    //header("Location: admin/home.php");
    header("Location: mercado/usuariomer.php");
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <!--<link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">-->
</head>
<body>
   <form action="validar.php" method="post">
       <h2>BIENVENIDO</h2>
        <h3>CORREO</h3>
        <input type="text" placeholder="&#128113; Ingrese su correo" name="usuario" required>
        <h3>CONTRASEÑA</h3>       
        <input type="password" placeholder="&#128273; Ingrese su contraseña" name="contraseña" id="contraseña" class="cajaentradatexto" required>
        <div class="ub1">
        <input type="checkbox" onclick="verpassword()" >Mostrar contraseña
        </div>
        <br>
        <input type="submit" value="Ingresar">
        <br>
        <br>
        <div id="reg">
        <b><a href="index.php" style="float:left">Regresar</a></b>
        <b><a href="loginadmi.php" style="float:right">Administrador</a></b>
        </div>
   </form> 
</body>

<script>
  function verpassword(){
      var tipo = document.getElementById("contraseña");
      if(tipo.type == "password")
	  {
          tipo.type = "text";
      }
	  else
	  {
          tipo.type = "password";
      }
  }
</script>

</html>