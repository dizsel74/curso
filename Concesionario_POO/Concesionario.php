<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		private static $ayuda=0;
		
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		static function ayuda_gob(){
			if (date("m-d-y") < "01-01-22"){
			self::$ayuda=4500;	
			}
		}
		
		
		function climatizador(){		
			//$valorClima = $this->precio_base+=2000;
			
				$this->precio_base+=2000;					
				
				//return $valorClima;
		}// fin climatizador
		
		function get_PrecioClima(){
			return "2000";
			
			}
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda;
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>