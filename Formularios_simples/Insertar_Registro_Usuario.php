<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insertar un Registro</title>

</head>

<body>
<?php
    // variables que obtiene los datos del formulario
	$nom=$_GET["nombre_usuario"];
	$clav=$_GET["clave_usuario"];
	$anos=$_GET["edad_usuario"];
	
	require("Conexion_BD.php");
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //caracteres latinos 
	//echo $nom,$clav,$anos;
	$query="INSERT INTO datos_usuario(nombre, clave, Edad) VALUES ('$nom','$clav',$anos )"; //Query 
	 
    $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	
	if($resultado_query==false){
		echo "Error";
	}else{
		echo "Un nuevo usuario se ha registrado <br><br>";
		echo"<table>
				<tr><td><label> Nombre</label> $nom</td></tr>";
		echo"<tr><td><label>Edad </label>$anos</td></tr>
			</table>";
	}
	
	mysqli_close($db_conexion); //CERAR CONEXION
?>

</body>
</html>