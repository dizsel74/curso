<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar/Actualizar 2/3 paginas</title>
</head>

<body>
<h2>Actualizar Registo 2/3</h2>
<?php
	$busqueda=$_GET["buscar"];
	
	require("Conexion_BD.php");
	
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	//$busqueda=mysqli_real_escape_string ($db_conexion,$_GET["buscar"]);
	
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //lea caracteres latinos acentos y Ñ
	
	
    
	$query="SELECT * FROM calificaciones WHERE Nombre LIKE '%$busqueda%'"; //Query de seleccion  con los % busca lo que este antes de  y lo despueds de bula variable busqueda
	 
	 $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	 
	
		  while(($fila=mysqli_fetch_array($resultado_query,MYSQLI_ASSOC))==true){
	echo	  "<table><tr> <td>";
	  echo "<form action='Actualizar_Registro_Calificaciones.php' method='get' >"; 
	    echo "<label> Nombre </label></td></tr> <tr><td>";
	       echo"<input type='text' name='nombre_act' value='". $fila['Nombre']. "'><br>";
	  echo "</td></tr> <tr><td>";
	  	echo "<label> Apellido </label></td></tr> <tr><td>";
	  		echo"<input type='text' name='apellidos_act' value='". $fila['Apellidos']. "'><br>";
	  	echo "</td></tr> <tr><td>";
	 	 echo "<label> Correo</label></td></tr> <tr><td>";
	 		echo "<input type='text' name='email_act' value='". $fila['Email']. "'><br>";
	  	echo "</td></tr> <tr><td>";
	  	echo "<label> Calificación Final</label></td></tr> <tr><td>";
	  		echo"<input type='text' name='total_act' value='".$fila['Total']. "'><br>";
	  	echo "</td></tr> <tr><td>";
	  		echo"<input type='submit' name='actualizar' value='ACTUALIZAR'>";
	 	echo "</form>";
	 echo "</td></tr> </table>";
	
	 }
	 
	 mysqli_close($db_conexion); //CERAR CONEXION
	 
?>
</body>
</html>