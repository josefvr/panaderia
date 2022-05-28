<?php
  require "no_autorizado.php";
  session_start();
  $usuario = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Inicio para Admi</title>
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
    <div>
      <br>
      <br>
      <a href="agregar_productos.php" class="agregar1"><img src="img/pan_cuernito.png" class="agregar"><br>Agregar nuevo pan</a>
      <br>
      <a href="ver_productos.php" class="ver1"><img src="img/concha.png" class="ver"><br>Ver productos</a>
      <br>
      <br>
      <a href="agregar_admi.php" class="ver1"><img src="img/agregar_admi.png" class="agregar"><br>Agregar administrador</a>
    </div>
  </div>
</body>
</html>