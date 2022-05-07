<?php
	
	class Panes_model {
		
		private $db;
		private $panes;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->panes = array();
		}
		
		public function get_panes()
		{
			$sql = "SELECT * FROM panes";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->panes[] = $row;
			}
			return $this->panes;
		}
		//Creamos una funcion para poder añadir un prodocto
		public function insertar($nombre_pan, $precio, $promocion){
			
			$resultado = $this->db->query("INSERT INTO panes (nombre_pan, precio, promocion) VALUES ('$nombre_pan', '$precio', '$promocion')");
			
		}
		
		
		public function get_pan($nombre_pan)
		{
			$sql = "SELECT * FROM panes WHERE nombre_pan='$nombre_pan'";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>