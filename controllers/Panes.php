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

        // Controlador para eliminar datos (Panes) de la BD.
		public function eliminar($nombre_pan){

			$panes = new Panes_model();
			$panes->eliminar($nombre_pan);
			$data["titulo"] = "Panes";
			$this->index();
		}
	}
?>