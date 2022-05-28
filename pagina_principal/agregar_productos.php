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
    <br>
    <div class="form">
      <h2 class="titulo_agregar">Formulario para agregar nuevo pan</h2>
      <form action="registro.php" method="post" enctype="multipart/form-data" class="registro_pan">
        <label for="imagen">Agrega la imagen relacionado con el pan a agregar</label>
        <br>
        <input type="file" name="imagen" accept=".jpg, .jpeg, png">
        <br>
        <br>
        <label for="nombre_pan">* Introduzca el nombre del pan</label>
        <br>
        <input type="text" name="nombre_pan" class ="medida_nombre" required/>
        <br>
        <br>
        <label for="precio">* Introduzca el precio del pan</label>
        <br>
        <input type="text" name="precio" class ="medida_precio" required/>
        <br>
        <br>
        <label for="promocion">Introduzca la promoción que tiene el pan (opcional)</label>
        <br>
        <input type="text" name="promocion" class ="medida_nombre">
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