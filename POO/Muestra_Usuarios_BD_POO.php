<?php
	require "DevuelveRegistros_BD_POO.php";
	$usuarios = new Devuelve_Usuarios();
	$arreglo_usuarios = $usuarios->Dame_usuarios();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	table{
		background:#0F6;
		border:#33F, thick;
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
		echo "<tabe>";
			echo "<tr><td>Nombre: ".$elementos['nombre']. " - </td>";
			echo "<td>Clave :".$elementos['clave']. " - </td>";
			echo "<td>Edad: ".$elementos['Edad']. " </td></tr>";
		echo "</table> <br>";
		
		}
	
?>
</body>
</html>