<?php

  require "conexion.php";
  
  $nombre_pan = $_POST['nombre_pan'];
  $precio = $_POST['precio'];
  $promocion = $_POST['promocion'];

  // Para guardar fotos
  $rutaTemporal = $_FILES['imagen']['tmp_name'];
  $rutaEnServidor = 'pan';
  $nombreImagen = $_FILES['imagen']['name'];

  $pesoImagen = $_FILES['imagen']['size'];
  $tipoImagen = $_FILES['imagen']['type'];

  // Para no sobreescribir la foto
  date_default_timezone_set('UTC');
  $nombreUnico = date('Y-m-d-h:i:s')."-".$nombreImagen;
  $rutaDestino = $rutaEnServidor.'/'.$nombreUnico;
  
  //Escribir la foto en carpeta "pan"
  move_uploaded_file($rutaTemporal,$rutaDestino);
  
  $insertar = "INSERT INTO panes (imagen, nombre_pan, precio, promocion) VALUES ('$rutaDestino','$nombre_pan','$precio','$promocion')";

  $query = mysqli_query($conectar,$insertar);

  // Hacer registro
  if($query){
    echo '
      <script>
        alert("Ya puede ver el pan en la página");
        location.href="menu.php";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert("Por favor, verifique lo que tiene");
        location.href="agregar_productos.php";
      </script>
    ';
  }

?>