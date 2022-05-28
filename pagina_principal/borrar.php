<?php
  require "conexion.php";
  $nombre_pan = $_GET['nombre_pan'];

  $borrar = "DELETE FROM panes WHERE nombre_pan= '$nombre_pan'";
  $resultado = mysqli_query($conectar,$borrar);

  if($resultado){
    header("location:menu.php");
  }
  else{
    echo "No se pudo borrar este producto";
  }

?>