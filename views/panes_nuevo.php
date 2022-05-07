<?php
//@Manuel Arias

//Esta vista nos ayudara a insertar un nuevo producto para la panaderia
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=panes&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="nombre_pan">Nombre del pan</label>
					<input type="text" class="form-control" id="nombre_pan" name="nombre_pan" />
				</div>
				
				<div class="form-group">
					<label for="precio">Precio actual</label>
					<input type="text" class="form-control" id="precio" name="precio" />
				</div>
				
				<div class="form-group">
					<label for="promocion">Promocion actual</label>
					<input type="text" class="form-control" id="promocion" name="promocion" />
				</div>
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</div>
	</body>
</html>