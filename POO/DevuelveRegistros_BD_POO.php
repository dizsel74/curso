<?php
	require "Conexion_BD_POO.php";
	
	class Devuelve_Usuarios extends Conexion_POO{
		
		public function Devuelve_Usuarios(){
			parent::__construct();//llamada al constructor padre del archivo padre	
			
			}
		
		public function Dame_usuarios(){
			$resultado=$this->conectar_BD->query('SELECT * FROM datos_usuario');
			$usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
			return $usuarios;
			}
	}

?>