<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <div class="fondo_inicio">
    <img src="img/logo.png" class="logo_admi">
    <br>
    <p class="centrar">
      Introduzca su correo y contraseña para poder ingresar. UNICAMENTE PARA ADMINISTRADORES 
    </p>
    <br>
    <form action="acceso.php" method="post" class="ingresar_admi">
      <input type="text" name="correo" placeholder="Ingresa tu correo" required/>
      <br> <br>
      <input class="tamanos" type="password" name="contrasena" placeholder="Ingresa tu contraseña" required/>
      <p>
        <input class="btnIniciar" type="submit" value="Iniciar sesión" />
      </p>
      <?php
	      $errorusuario = isset($_GET["errorusuario"]);	
	      if($errorusuario == "SI"){
 		      echo '<div><h2 class="mensaje">Datos incorrectos</h2><br></div>';
	      }
      ?>
    </form>
  </div>
</body>
</html>