<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	//Compra_vehiculo::$ayuda=10000;
	
	Compra_vehiculo::ayuda_gob();
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	//echo"<br> El presio final de Antonio es de " . $compra_Antonio->precio_final(). " por que escojio " . $compra_Antonio->climatizador(); 
	
	//echo"<br>El presio final de Antonio es de " . $compra_Antonio->precio_final(). " por que escojio " . $compra_Antonio->get_PrecioClima() ; 
	
	
	echo "<br>".$compra_Antonio->precio_final() . "<br>";
	
	
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>