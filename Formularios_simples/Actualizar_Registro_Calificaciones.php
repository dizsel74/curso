<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar/Actualizar 3/3 paginas</title>

</head>

<body>
<h2>Actualizar Registo 3/3</h2>
<?php
    // variables que obtiene los datos del formulario
	$actualizar_nombre=$_GET["nombre_act"];
	$actualizar_apellidos=$_GET["apellidos_act"];
	$actualizar_email=$_GET["email_act"];
	$actualizar_total=$_GET["total_act"];//asi es inseguro puede haner inyección de datos
	
	require("Conexion_BD.php");
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	
	/*$actualizar_nombre=mysqli_real_escape_string($db_conexion,$_GET["nombre_act"]);
	$actualizar_apellidos=mysqli_real_escape_string($db_conexion,$_GET["apellidos_act"]);
	$actualizar_email=mysqli_real_escape_string($db_conexion,$_GET["email_act"]);
	$actualizar_total=mysqli_real_escape_string($db_conexion,$_GET["total_act"]);*/
	
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //caracteres latinos 
	//echo $nom,$clav,$anos;
	$query="UPDATE calificaciones SET Nombre='$actualizar_nombre', Apellidos='$actualizar_apellidos', Email='$actualizar_email', Total= '$actualizar_total' WHERE Nombre='$actualizar_nombre' AND Email='$actualizar_email'"; //Query 
	 
    $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	
	if($resultado_query==false){
		echo "Error de actualización en query";
	}else{
		if(mysqli_affected_rows($db_conexion)==0){
			echo "No hay registros que actualizar" ;
		}
		else{
		echo "Se han actualizado ". mysqli_affected_rows($db_conexion)." registros con los siguientes datos<br><br>";
		echo"<table>
				<tr><td><label> Nombre </label> $actualizar_nombre</td></tr>";
		echo   "<tr><td><label>Apellidos </label>$actualizar_apellidos</td></tr>";
		echo   "<tr><td><label>Correo </label>$actualizar_email</td></tr>";
		echo   "<tr><td><label>Calificaci&oacute;n final </label>$actualizar_total</td></tr>";
		echo"</table>";
		}
	}
	
	mysqli_close($db_conexion); //CERAR CONEXION
?>

</body>
</html>