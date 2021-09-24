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
	$años=$_GET["edad_usuario"];
	
	require("Conexion_BD.php");
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //caracteres latinos 
	//echo $nom,$años;
	$query="DELETE FROM datos_usuario WHERE nombre='$nom' AND Edad = $años"; //Query 
	//echo $query;
	 //DELETE FROM `datos_usuario` WHERE `nombre`="JULIO" AND`Edad` =69
    $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	
	if($resultado_query==false){
		echo "Error";
	}else{
		//echo "Un nuevo usuario se ha eliminado <br><br>";
		//echo mysqli_affected_rows($db_conexion);
		if(mysqli_affected_rows($db_conexion)==0){
			echo "No hay registros con esos valores para elimminar  Nombre: $nom  y Edad: $años";
			
		}else{
			echo "se han eleiminado ". mysqli_affected_rows($db_conexion) ." registros";
		}
	}
	
	mysqli_close($db_conexion); //CERAR CONEXION
?>

</body>
</html>