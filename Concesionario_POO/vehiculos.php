<?php

 class Coche{  //Clase  u Objeto tiene caracteristicas y funcionalidades
	 var $color;    //propiedad o caracteristica
	// private $ruedas;  //eta encapsulada no puede ser midificada fuera de la clase
	 protected $ruedas; // ESTO ES PARA   QUE NO SE VEA DESDE AFUERA PERO LAS SUBCLASES SI PUEDAN ACCEDER A ELLA
	 function Coche(){  //Cuando una funcios es llamada igual que la clase es un costructoc o metodo constriuctor Da el ESTADO Inicial al OBJETO
	 	$this->color="";
		$this->ruedas=4;	 
	 	}
	 function get_ruedas(){
		return $this->ruedas;
	 }
	 function frena(){    //fubcionalidades
	 	echo "Frenando<br>";
	 	}
	 function avanza (){
		 echo "Avanzando <br>";
	 	}
	 function cambioColor($que_Color,$que_Coche){  // funcio o metodo parea cambiar el colr de ma variaable del objeto antes definida
		 $this->color=$que_Color;
		 echo "<br>El ". $que_Coche . " cambio su color a  : " . $this->color;
 		}
	 
 }
 
 
 //---------------------------------Clase copiada y Pegada   ---------
 /*
  class Camion{  //Clase  u Objeto tiene caracteristicas y funcionalidades
	 var $color;    //propiedad o caracteristica
	 var $ruedas;
	 function Camion(){  //Cuando una funcios es llamada igual que la clase es un costructoc o metodo constriuctor Da el ESTADO Inicial al OBJETO
	 	$this->color="Gris";
		$this->ruedas=8;	 
	 	}
	 function frena(){    //funcionalidades
	 	echo "Fenando<br>";
	 	}
	 function avanza (){
		 echo "Avanzando <br>";
	 	}
	 
	 
 }*/
 
 //---------------------------------Clase heredadad en lugar de copiada y Pegada   ---------
 class Camion extends Coche{
	 
	 function Camion(){
		 $this->ruedas="8";
		 $this->color="Gris";
	 }
	  function cambioColor($que_Color,$que_Camion){  // funcio o metodo parea cambiar el colr de ma variaable del objeto antes definida
		 $this->color=$que_Color;
		 echo "<br>El Bus ". $que_Camion . " cambio su color a  : " . $this->color;
 		}
		
		function frena(){
		echo "Pisando el freno <br>";
		parent::frena();
		echo "Stops Encendidos<br>";	
		}
 }
 ?>