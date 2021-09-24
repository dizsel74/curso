<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Arreglos</title>
</head>

<body>
	<?php

	echo "----------------------- Array Indexado ----------------------<br>";
	//opcion de definicion
	$semana[] = "Lunes";
	$semana[] = "Martes";
	$semana[] = "Miercoles";
	// segunda opcion de definicion
	$semana = array("lunes", "martes", "miercoles", "jueves");

	echo $semana[1];
	echo "<br>--------------------  Array Asociativo ----------------------<br>";
	$datos = array("nombre" => "Arturo", "edad" => "42", "nacionalidad" => "Mexicana");
	echo $datos["nacionalidad"] . " esto es asociativo<br>";
	echo "<br>-----------------------Verificas si un Var es un array  is_array----------------------<br>";

	if (is_array($semana)) {
		echo "\$semana si es un array";
	} else {
		echo "no es un array";
	}
	echo "<br>-------------------Recorrer un Array asosciatico para ver todos los elementos -------------------<br>";

	foreach ($datos as $clave_en_arreglo => $valor_en_Arreglo) {
		echo "A $clave_en_arreglo le corresponde $valor_en_Arreglo <br>";
	}
	$datos["apellido"] = "Mendoza";
	echo " se agrego al arreglo apellido <br>";
	foreach ($datos as $clave_en_arreglo => $valor_en_Arreglo) {
		echo "A $clave_en_arreglo le corresponde $valor_en_Arreglo <br>";
	}
	echo "<br>--------------Recorrer un Array indexadoo para ver todos los elementos -------------------<br>";

	for ($i = 0; $i < count($semana); $i++) {
		//echo "En la posicion $i el dia de semana es " . $semana[$i]. "<br>";
		echo "En la posicion $i el dia de semana es $semana[$i] <br>";
	}

	$semana[] = "viernes";  // asi agregas un elemento a un array indexado
	echo " se agrego al arreglo Viernes <br>";
	for ($i = 0; $i < count($semana); $i++) {
		echo "En la posicion $i el dia de semana es " . $semana[$i] . "<br>";
		//echo "En la posicion $i el dia de semana es $semana[$i] <br>";
	}
	echo "<br>--------------Arreglar un Array indexadoo s -------------------<br>";

	sort($semana);
	for ($i = 0; $i < count($semana); $i++) {
		echo $semana[$i] . ", ";
	}
	echo "<br>--------------Array multidimension - ------------------<br>";

	$alimentos = array(
		"Fruta" => array(
			"Tropical" => "Kiwi",
			"Citricos" => "NAranja"
		),
		"Leche" => array(
			"Animal" => "Vaca",
			"Vegetal" => "Soya"
		),
		"Carne" => array(
			"Res" => "TBone",
			"Ave" => "Gallina"
		),
	); //indexado

	echo $alimentos["Carne"]["Ave"] . "<br>"; //echo simple 

	foreach ($alimentos as $primera_Dimension => $segunda_Dimension) {
		echo "Primer dimension  $primera_Dimension<br>";
		while (list($clave, $valor) = each($segunda_Dimension)) {
			//echo "hay ". $clave ." =" . $valor ."<br>";
			echo "hay $clave  = $valor <br>";
		}
		echo "<br>";
	}

	echo "<br>--------------Array multidimension - usando var dump ------------------<br>";
	echo var_dump($alimentos);
	?>
</body>

</html>