
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clases</title>
</head>

<body>
<?php
echo "<p>-------------------CLASES ---------------------------</p>";

 class Coche{  //Clase  u Objeto tiene caracteristicas y funcionalidades
	 var $color;    //propiedad o caracteristica
	 var $ruedas;
	 function Coche(){  //Cuando una funcios es llamada igual que la clase es un costructoc o metodo constriuctor Da el ESTADO Inicial al OBJETO
	 	$this->color="";
		$this->ruedas=4;	 
	 }
	 function frena(){    //fubcionalidades
	 	echo "Fenando<br>";
	 }
	 function avanza (){
		 echo "Avanzando <br>";
	 }
	 function cambioColor($que_Color,$que_Coche){  // funcio o metodo parea cambiar el colr de ma variaable del objeto antes definida
		 $this->color=$que_Color;
		 echo "<br>El ". $que_Coche . " cambio su color a  : " . $this->color;
 }
	 
 }
 $reanult=new Coche();  // $instanncia / ejemplo   =   objeto
 
 $reanult->avanza(); //llamado al metodo o función
 $reanult->frena();
 echo $reanult->ruedas;  //lamado a la propiedad (var) del objeto
 
 $reanult->cambioColor("rojo" , "Renault"); // llamada al metodo para cambio de Color y se pasa el parametro
 


?>
</body>
</html>