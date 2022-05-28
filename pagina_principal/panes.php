<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menú de Panes - Panadería</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <?php
    include "arriba.php";
  ?>
  <div class="fondo_productos">
    <h1 class="titulo_menu">Menú</h1>
    <br>
    <?php
      require 'conexion.php';
      $todos= "SELECT * FROM panes";
      $resultado= mysqli_query($conectar,$todos);
      while ($fila = mysqli_fetch_assoc($resultado)){
    ?>
    <table class="tabla_menu1">
      <tr>
        <td class="tamanio4">
          <img class="tamanio_imagen" src="<?php echo $fila['imagen']; ?>" alt="">
        </td>
        <td class="tamanio5">
          <?php echo $fila['nombre_pan']; ?>
        </td>
        <td class="tamanio6">
          <?php echo $fila['precio']; ?>
        </td>
        <td class="tamanio7">
          <?php echo $fila['promocion']; ?>
        </td>
      </tr>
      <?php
        }
        mysqli_free_result($resultado);
      ?>
    </table>
    <br>
  </div>
  <?php
    include "abajo.php";
  ?>
</body>
</html>