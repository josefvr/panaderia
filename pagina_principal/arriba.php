<div class="fecha1">
  <p class="fecha2">
    <script type="text/javascript">
      var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
      var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
      var f=new Date();
      document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear() + ", ");
      var fecha= new Date();
      var horas= fecha.getHours();
      var minutos = fecha.getMinutes();
      var segundos = fecha.getSeconds();
      
      document.write(" " + horas + ":" + minutos + ":" + segundos);
    </script>
  </p>
</div>
<div class="inicio">
  <img src="img/logo.png" class="logo">
  <a href="quienes_somos.php" class="dona1"><img src="img/dona.png" class="dona">¿Quienes somos?</a>
  <a href="contactar.php" class="cuernito1"><img src="img/cuernito.png" class="cuernito">Contacto</a>  
  <a href="panes.php" class="mantecada1"><img src="img/mantecada.png" class="mantecada">Menú</a>
  <a href="index.php" class="concha1"><img src="img/concha.png" class="concha">Inicio</a>
</div>