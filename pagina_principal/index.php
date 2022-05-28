<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio - Panadería</title>
  <link rel="stylesheet" href="estilo.css">
</head>
<body>
  <?php
    include "arriba.php";
  ?>
  <div class="index">
    <h1 class="DulcePan">Horneando con mucho cariño, todos los días</h1>
    <p class="texto1">
      El pan constituye una importante fuente energética en forma de hidratos de carbono complejos, <br> proporcionando al organismo la que necesita durante más tiempo. 
    </p>
    <table class="tabla1">
      <tr>
        <td>
          <img src="img/conchas_tabla.jpg">
        </td>
        <td>
          <img src="img/cuernitos_tabla.jpg">
        </td>
        <td>
          <img src="img/Hojaldras_tabla.jpg">
        </td>
      </tr>
      <tr>
        <td>
          <img src="img/panes_tabla.jpg">
        </td>
        <td>
          <img src="img/donas_fritas_ok.jpg">
        </td>
        <td>
          <img src="img/tabla.jpg">
        </td>
      </tr>
    </table>
  </div>
  <div class="preguntar">
    <p class="cotizar">
      Pregunta por las promociones válidas
    </p>
    <a href="#Solicitar" class="btnSolicitar">Solicitar más información</a>
  </div>
  <div class="video">
    <iframe class="videoc" src="https://www.youtube.com/embed/bbfsoxogDsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="form_correo" id="Solicitar">
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