<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	body{
		background-color:#CCC;
	}
	
	
</style>
</head>

<body>
<h3> Pagina de Conexion POO 1/1</h3>
<?php
	$conexionPOO = new mysqli("localhost","root", "", "usuarios");
	
	if($conexionPOO->connect_errno){
		echo "FALLA DE CONEXION EL ERROR ES: ". $conexionPOO -> connect_errno;
	}
	$conexionPOO ->set_charset("utf8"); // ANTES mysqli_set_charset1($conexionPOO, "utf8")
	
	$query_consulta  = "SELECT * FROM datos_usuario";
	
	$resultado_query = $conexionPOO->query($query_consulta); //ANTES $resultado_query=mysqli_query($conexionPOO, $query_consulta);
	
	if($conexionPOO->errno){
		die($conexionPOO->errno);
	}
	while($fila=$resultado_query->fetch_assoc()){// ANTES while($fila=mysqli_fetch_array($resultado_query,MYSQL_ASSOC)){
		
		echo"<table bordercolor='#FFFF00'>";
	  			
				echo "<tr><td><label> Nombre </label></td>"; 
				echo "<td>". $fila['nombre']. "</td></tr>";
	  	        
				echo " <tr><td><label> Clave </label></td>";
	  		    echo"<td>". $fila['clave']. "</td></tr>";
	  	        
				echo " <tr><td><label> Edad </label></td>";
	  		    echo"<td>". $fila['Edad'].  "</td></tr>";
			
		echo "</table><br>";
	}
$conexionPOO->close();//ANTES mysqli_close($conexionPOO);
?>
</body>
</html>