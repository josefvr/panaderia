<?php
  require "no_autorizado.php";
  session_start();
  $usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar admi</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <div class="fondo_menu">
      <table class="arriba">
        <tr>
          <td>
            <img src="img/logo.png" class="logo_inicio_admi">
          </td>
          <td>
            <h3 class="usuario">
              <?php 
                echo $usuario; 
              ?>
            </h3>
          </td>
          <td>
            <a href="salir.php" class="salir">Salir<img src="img/btnsalir.png" class="cerrar"></a>
          </td>
        </tr>
      </table>
      <br>
    <div class="form">
      <h2 class="titulo_agregar">Formulario para agregar administrador</h2>
      <form action="registro_admi.php" method="post" enctype="multipart/form-data" class="registro_pan">
        <label for="id">* Introduzca el ID del administrador</label>
        <br>
        <input type="text" name="id" class ="medida_nombre" required/>
        <br>
        <br>
        <label for="contrasena">* Introduzca la contraseña </label>
        <br>
        <input type="password" name="contrasena" class ="medida_nombre" required/>
        <br>
        <br>
        <label for="nombre">* Introduzca el nombre del administrador</label>
        <br>
        <input type="text" name="nombre" class ="medida_nombre" required/>
        <br>
        <br>
        <label for="correo">* Introduzca el correo del nuevo administrador</label>
        <br>
        <input type="text" name="correo" class ="medida_precio" required/>
        <br>
        <br>
        <input type="submit" value="Guardar datos">
      </form>
      <br>
      <br>
      <a href="menu.php" class="btnAtras">Atrás</a>
    </div>
  </div>
</body>
</html>