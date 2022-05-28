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
  <title>Productos</title>
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
    <a href="menu.php" class="btnAtras1">Atrás</a>
    <br>
    <br>
    <table class="tabla_menu">
      <tr>
        <th class="bordes">
          Imagen del pan
        </th>
        <th class="bordes1">
          Pan
        </th>
        <th class="bordes1">
          Precio del pan
        </th>
        <th class="bordes1">
          Promoción o comentarios
        </th>
        <th class="bordes1">
          Borrar
        </th>
      </tr>
      <?php
        require 'conexion.php';
        $todos= "SELECT * FROM panes";
        $resultado= mysqli_query($conectar,$todos);
        while ($fila = mysqli_fetch_assoc($resultado)){
      ?>
      <tr>
        <td class="tamanio">
          <img class="tamanio_imagen" src="<?php echo $fila['imagen']; ?>" alt="">
        </td>
        <td class="tamanio1">
          <?php echo $fila['nombre_pan']; ?>
        </td>
        <td class="tamanio2">
          <?php echo $fila['precio']; ?>
        </td>
        <td class="tamanio3">
          <?php echo $fila['promocion']; ?>
        </td>
        <td class="tamanio3">
          <a href="#" onClick="validar('borrar.php?nombre_pan=<?php echo $fila["nombre_pan"]; ?>')"><img src="img/icono_eliminar.png" class="eliminar"></a>
        </td>
      </tr>
      <?php
        }
        mysqli_free_result($resultado);
      ?>
    </table>
    <script>
      function validar(url){
      var borrar = confirm("¿De verdad quieres borrar este producto?");
        if(borrar == true){
          window.location=url;
        }
      } 
    </script>
  </div>
</body>
</html>