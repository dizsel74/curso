<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO Consulta Prep Select </title>
<style>
	table{
		background:#0F6;
		border:#33F solid 10px;
		font-size:16px;
		font-family:"Courier New", Courier, monospace;
		text-align:justify;
		margin:auto;
	}
	body{
		background:#688;
	}
	h1{
		margin:auto;
		font-family:Verdana, Geneva, sans-serif;
		text-align:center;
	}
	</style>
</head>

<body>
<h2> PDO eliminar 2/2 Preparadas y apuntadas</h2>
<?php
	$quita_nombre=$_POST['eliminar_nombre_usuario'];
	
	$quita_edad=$_POST['eliminar_edad_usuario'];
	try{
		require("PDO_datos_conexion.php");
		
		$conectar_BD = new PDO($direccion, $usuario, $clave); //DATOS EN EL REQUIRE
		
		$conectar_BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$conectar_BD->exec("SET CHARACTER SET utf8");

		$query="DELETE FROM datos_usuario WHERE nombre=:nom AND Edad=:eda";
		
		$resultado_pdo_stmt=$conectar_BD->prepare($query);
		
		$resultado_pdo_stmt->execute(array(":nom"=>$quita_nombre,  ":eda"=>$quita_edad)); //Array asociativo
		
		
		   echo "Un usuario $quita_nombre se ha elminado <br><br>";
			echo"<table>
				<tr><td><label> Nombre eliminado </label> $quita_nombre</td></tr>";
			echo"<tr><td><label>Edad eliminada </label>$quita_edad</td></tr>
			</table>";
		$resultado_pdo_stmt->closeCursor();
		
	}catch(Exception $mensaje_error){
		
		die('UPS error :' .$mensaje_error->GetMessage() . " y esta en la linea " . $mensaje_error->getLine());
	
	}finally {
		$conectar_BD=null;
	}

?>
</body>
</html>