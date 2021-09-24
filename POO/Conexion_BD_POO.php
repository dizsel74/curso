<?php
	require("Config_BD_POO.php");

	
	 class Conexion_POO{
		
		protected $conectar_BD;
		
		public function Conexion_POO(){
			
			try{
				$this->conectar_BD=new PDO('mysql:host=localhost; dbname=usuarios','root','');
				$this->conectar_BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conectar_BD->exec("SET CHARACTER SET utf8");
				return $this->conectar_BD;
			}catch(Exception $e){
				echo "El error es :". $e->getCode(). " y " . $e->getLine();
			}
			
			
			
			
			/*$this->conectar_BD= new mysqli(BD_HOST, BD_USUARIO, BD_CLAVE, BD_NOMBRE);
			
			if($this->conectar_BD->connect_errno){
				echo "Fallo de Conexion Error" . $this->conectar_BD->connect_error;
			return;
			}
	 		
			$this->conectar_BD->set_charset(BD_CARACTERES);*/
		
	 	}
	  
	 }
?>