<?php
	require "Conexion_BD_POO.php";
	
	class Devuelve_Alumnos extends Conexion_POO{
		
		public function Devuelve_Alumnos(){
			parent::__construct();//llamada al constructor padre del archivo padre	
			
			}
		
		public function Dame_Alumnos($alumno){
			$sql='SELECT * FROM calificaciones WHERE Nombre ="'. $alumno .'"';
			$hacer_stmt=$this->conectar_BD->prepare($sql);
			$hacer_stmt->execute(array());
			$resutado=$hacer_stmt->fetchAll(PDO::FETCH_ASSOC);
			$hacer_stmt->closeCursor();
			return $resutado;
			$this->conectar_BD=null;
		
			
			
			
			
			/*$resultado=$this->conectar_BD->query('SELECT * FROM calificaciones WHERE Nombre ="'. $alumno .'"' );
			$alumnos=$resultado->fetch_all(MYSQLI_ASSOC);
			return $alumnos;*/
			}
	}

?>