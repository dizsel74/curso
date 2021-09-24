<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar en BD en 2/2 paginas</title>
</head>

<body>
<h2> BUSQUEDA  2/2 PAGINAS</h2>
<?php
	//$busqueda=$_GET["buscar"];
	
	require("Conexion_BD.php");
	
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	$busqueda=mysqli_real_escape_string ($db_conexion,$_GET["buscar"]);
	
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //lea caracteres latinos acentos y Ñ
	
	
    
	$query="SELECT * FROM calificaciones WHERE Nombre LIKE '%$busqueda%'"; //Query de seleccion  con los % busca lo que este antes de  y lo despueds de bula variable busqueda
	 
	 $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	 
	
		  while(($fila=mysqli_fetch_array($resultado_query,MYSQLI_ASSOC))==true){
			echo"<table>";
	  			
				echo "<tr><td><label> Nombre </label></td>"; 
				echo "<td>". $fila['Nombre']. "</td></tr>";
	  	        
				echo " <tr><td><label> Apellido </label></td>";
	  		    echo"<td>". $fila['Apellidos']. "</td></tr>";
	  	        
				echo " <tr><td><label> Correo </label></td>";
	  		    echo"<td>". $fila['Email'].  "</td></tr>";
		
		        echo " <tr><td><label> Calificación Final </label></td>";
	  		    echo"<td>". $fila['Total']. "</td></tr>";
			
			 echo "</table><br>";
	
	 }
	 
	 mysqli_close($db_conexion); //CERAR CONEXION
	 
?>
</body>
</html>