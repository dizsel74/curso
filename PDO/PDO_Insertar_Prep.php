<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PDO Consulta Prep Select2/3 </title>
</head>

<body>
	<h2> PDO BUSQUEDA 2/3 PAGINAS Preparadas</h2>
	<?php
	$inserta_nombre = $_POST['insertar_nombre_usuario'];
	$inserta_clave = $_POST['insertar_clave_usuario'];
	$inserta_edad = $_POST['insertar_edad_usuario'];

	/*Codigo encriptar blowfish*/
	$cifrado = password_hash($inserta_clave, PASSWORD_DEFAULT);

	try {
		require("PDO_datos_conexion.php");

		$conectar_BD = new PDO($direccion, $usuario, $clave); //DATOS EN EL REQUIRE

		$conectar_BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$conectar_BD->exec("SET CHARACTER SET utf8");

		$query = "INSERT INTO datos_usuario (nombre, clave, Edad) VALUES (:nom, :clv, :eda)";

		$resultado_pdo_stmt = $conectar_BD->prepare($query);


		//$resultado_pdo_stmt->execute(array(":nom"=>$inserta_nombre, ":clv"=>$inserta_clave, ":eda"=>$inserta_edad)); //Array asociativo sin encriptar

		$resultado_pdo_stmt->execute(array(":nom" => $inserta_nombre, ":clv" => $cifrado, ":eda" => $inserta_edad)); //Array asociativo con encriptar

		echo "Un nuevo usuario se ha registrado <br><br>";
		echo "<table>
				<tr><td><label> Nombre</label> $inserta_nombre</td></tr>";
		echo "<tr><td><label>Edad </label>$inserta_edad</td></tr>";
		echo "<tr><td><label>Edad </label>$inserta_clave</td></tr>";
		echo "<tr><td><label>Edad </label>$cifrado</td></tr>
			</table>";
		$resultado_pdo_stmt->closeCursor();
	} catch (Exception $mensaje_error) {

		die('UPS error :' . $mensaje_error->GetMessage() . " y esta en la linea " . $mensaje_error->getLine());
	} finally {
		$conectar_BD = null;
	}

	?>
</body>

</html>