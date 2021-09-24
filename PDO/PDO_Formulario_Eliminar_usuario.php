<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>INSERT 1/2 PAGINAS preparadas</title>
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
<h1>Eliminar Formulario PDO 1 de 2 apuntadas</h1>
<form action="PDO_Eliminar_Prep.php"  method="post" name="registro_usuario">
	<table>
	<tr>
		<td><label>Nombre de usuario:</label></td>
        <td><input name="eliminar_nombre_usuario" type="text"/></td>
	</tr>
	
    <tr>
		<td><label>Edad de usuario:</label></td>
        <td><input name="eliminar_edad_usuario" size="2" type="text"/></label></td>
	</tr>
	<tr>
    	<td></td>
		<td><input type="submit" name="registro_usuario" value="Eliminar Registro" /></td>
	</tr>
    </table>
</form>
</body>
</html>