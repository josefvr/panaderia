<?php
  require "conexion.php";

  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];
  $comparar = "SELECT * FROM admi WHERE correo = '$correo' AND contrasena = '$contrasena' ";

  $resultado = mysqli_query($conectar , $comparar);

  if(mysqli_num_rows($resultado) > 0 ){
    session_start();
    $_SESSION['username'] = $correo;
    $_REQUEST['nombre'] = $nombre;
    $_SESSION["autentificado"] = "SI";
    header("Location: menu.php");
  }
  else{
    echo '
      <script>
        alert("Error en la autentificación");
        location.href = "login.php?errorusuario=SI";
      </script>
    ';
  }
  mysqli_free_result($resultado);
  mysqli_close($conectar);

?>