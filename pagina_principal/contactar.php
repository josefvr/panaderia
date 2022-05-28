<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - Panadería</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <?php
    include "arriba.php";
  ?>
  <div class="fondo_ubi">
    <h1 class="centrar1">
      Ubicanos
    </h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7451.290792131181!2d-89.57816383454661!3d20.96675094494167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5670e5fb151683%3A0x1f3600aeda8ea36e!2sPanaderia%2C%20San%20Rafael%20Pacabtun!5e0!3m2!1ses!2smx!4v1639614975281!5m2!1ses!2smx"  style="border:0;" allowfullscreen="" loading="lazy" class="mapa"></iframe>

  </div>
  <br>
  <div class="form_correo">
    <h1 class="titulo_solicitar">Solicita más información aquí</h1>
    <form action="raw_enviar_mailer.php" class="centrar_form" method="post">
      <input type="text" required name="nombre" placeholder="Escribe tu nombre" id="nombre" class="tamanio_nombre">
      <br><br>
      <input type="email" required name="email" placeholder="Escribe tu correo" id="email" class="tamanio_nombre">
      <br><br>
      <input type="tel" required name="celular" placeholder="Escribe tu número telefónico" id="celular" class="tamanio_nombre">
      <br><br>
      <textarea name="comentarios" required id="comentarios"  placeholder="Dejanos tus comentarios" class="tamanio_bandeja"></textarea>
      <br><br>
      <input type="submit" class="btnEnviar" value="Enviar">
    </form>
  </div>
  <?php
    include "abajo.php";
  ?>
</body>
</html>