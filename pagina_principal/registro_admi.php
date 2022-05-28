<?php

  require "conexion.php";
  
  $id = $_POST['id'];
  $contrasena = $_POST['contrasena'];
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];

  
  $insertar = "INSERT INTO admi (id, contrasena, nombre, correo) VALUES ('$id','$contrasena','$nombre','$correo')";

  $query = mysqli_query($conectar,$insertar);

  // Hacer registro
  if($query){
    echo '
      <script>
        alert("Ya se puedo registrar el nuevo administrador");
        location.href="menu.php";
      </script>
    ';
  }
  else{
    echo '
      <script>
        alert("Por favor, verifique lo que tiene");
        location.href="agregar_admi.php";
      </script>
    ';
  }

?>