<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vehiculos</title>
</head>
<body>
<?php
	include ("vehiculos.php");

	$mazda = new Coche();
	$Internacional=new Camion();
	$BMW= new Coche();
	
	// echo $mazda->ruedas . "<br>"; no funciona porque es un propiedad privada y solo se puede modificar desde el interior de las clases
	//echo $Internacional->ruedas;
	echo "<p> El Camion tiene " .$Internacional->get_ruedas()  . " Ruedas y el Mazda tiene " . $mazda->get_ruedas() . " ruedas </p>";
	echo $Internacional->color . "<br>";
	$Internacional->frena();
	$mazda->cambioColor("Azul","Mazda");
	$Internacional->cambioColor("Morado","Internacional");
	
	
?>
</body>
</html>