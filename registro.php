<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--<meta http-equiv="X-UA-Compatible" content="ie=edge">-->
  <link rel="stylesheet" href="css/registro.css">
  <title>Formulario Registro</title>
</head>
<body>
  <form action="validarre.php" method="post">
    <h4>REGISTRO</h4>
    <input class="controls" type="text" name="usuario" placeholder="Ingrese correo" required>
    <input class="controls" type="password" name="contraseña" id="correo" placeholder="Ingrese su Contraseña" required>
    <div class="ub1">Rol: </div>
    <td>
    <select name="rol" class="selectAltura">
      <option value="0" style="display:none;"><label>Seleccionar</label></option>
      <option value="2">Productor</option>
      <option value="3">Mercado</option>
    </select>
    </td>

    <!--
      <input class="controls" type="text" name="usuario" placeholder="Ingrese nombre" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese apellido paterno" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese apellido materno" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese telefono" required>

      <input class="controls" type="text" name="usuario" placeholder="Ingrese calle " required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese num int" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese num ext" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese colonia" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese ciudad" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese estado" required>
      <input class="controls" type="text" name="usuario" placeholder="Ingrese coordenadas" required>
    -->
    <!--<p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>-->
    <input class="botons" type="submit" value="Registrar" name="btnregistrar">
    <p><a href="login.php">¿Ya tengo Cuenta?</a></p>
    <p><a href="index.php">REGRESAR</a></p>
  <!--</section>-->
  </form>

</body>
</html>