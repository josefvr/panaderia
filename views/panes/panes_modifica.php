<?php
//Esta vista será usada como un formulario que nos ayudaraa actualizar los datos de la panaderia	
?>

<!DOCTYPE html>
<html>
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
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=panes&a=actualizar" autocomplete="off">
				
				<input type="hidden" id="id" name="nombre_pan" value="<?php echo $data["nombre_pan"]; ?>" />
				
				<div class="form-group">
					<label for="nombre_pan">Nombre del pan</label>
					<input type="text" class="form-control" id="nombre_pan" name="nombre_pan" value="<?php echo $data["panes"]["nombre_pan"]?>" />
				</div>

				<div class="form-group">
					<label for="precio">Nuevo precio</label>
					<input type="text" class="form-control" id="precio" name="precio" value="<?php echo $data["panes"]["precio"]?>" />
				</div>

				<div class="form-group">
					<label for="promocion">Nueva promocion</label>
					<input type="text" class="form-control" id="promocion" name="promocion" value="<?php echo $data["panes"]["promocion"]?>" />
				</div>
				
				
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Guardar</button>
				
			</form>
		</body>
	</html>