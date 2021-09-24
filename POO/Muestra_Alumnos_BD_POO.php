<?php
	require "DevuelveAlumnos_BD_POO.php";
	
	$alumno=$_GET["BuscarAlumno"];
	
	$usuarios = new Devuelve_Alumnos();
	$arreglo_usuarios = $usuarios->Dame_Alumnos($alumno);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
	table{
		background:#0F6;
		border:#33F, 4px;
		font-size:16px;
		font-family:"Courier New", Courier, monospace;
		text-align:justify;
	}
	
	
</style>
</head>
<body>
<h1>Datos de usuarios</h1>
<?php
	foreach($arreglo_usuarios as $elementos){
		echo "<table>";
			echo "<tr><td><strong>Nombre:</strong> ".$elementos['Nombre']. "  " .$elementos['Apellidos']. " estudia en la  </td>";
			echo "<td>institución: ".$elementos['Institución']. " </td></tr>";
		echo "</table> <br>";
		
		}
	
?>
</body>
</html>