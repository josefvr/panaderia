<?php

	class PanesController {

		public function __construct(){
			require_once "models/PanesModel.php";
		}

		public function index(){
			$panes = new Panes_model();
			$data["titulo"] = "Panes";
			$data["panes"] = $panes->get_panes();
			require_once "views/panes/panes.php";
		}

		public function nuevo(){
			$data["titulo"] = "Panes";
			require_once "views/panes/panes_nuevo.php";
		}

		public function guarda(){
			
			$nombre_pan = $_POST['nombre_pan'];
			$precio = $_POST['precio'];
			$promocion = $_POST['promocion'];
			
			$vehiculos = new Panes_model();
			$vehiculos->insertar($nombre_pan, $precio, $promocion);
			$data["titulo"] = "Panes";
			$this->index();
		}

		public function modificar($nombre_pan){
			
			$panes = new Panes_model();
			
			$data["nombre_pan"] = $nombre_pan;
			$data["panes"] = $panes->get_pan($nombre_pan);
			$data["titulo"] = "Panes";
			require_once "views/panes/panes_modifica.php";
		}

		public function actualizar(){

			$nombre_pan = $_POST['nombre_pan'];
			$precio = $_POST['precio'];
			$promocion = $_POST['promocion'];

			$panes = new Panes_model();
			$panes->modificar($nombre_pan, $precio, $promocion);
			$data["titulo"] = "Panes";
			$this->index();
		}

        // Controlador para eliminar datos (Panes) de la BD.
		public function eliminar($nombre_pan){

			$panes = new Panes_model();
			$panes->eliminar($nombre_pan);
			$data["titulo"] = "Panes";
			$this->index();
		}
	}
?>