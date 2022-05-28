<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="ccs/estilo.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<a href="index.php?c=panes&a=nuevo" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Imagen</th>
							<th>Nombre del pan</th>
							<th>Precio</th>
							<th>Promocion actual</th>
							<th>Editar</th>
							<th>Eliminar</th>
							
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["panes"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["imagen"]."</td>";
							echo "<td>".$dato["nombre_pan"]."</td>";
							echo "<td>".$dato["precio"]."</td>";
							echo "<td>".$dato["promocion"]."</td>";
							echo "<td><a href='index.php?c=panes&a=modificar&nombre_pan=".$dato["nombre_pan"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=panes&a=eliminar&nombre_pan=".$dato["nombre_pan"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>