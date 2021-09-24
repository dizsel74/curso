<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Borrar Usuario</title>
<style>
	table{
		background:#F00;
		border:#33F, thick;
		margin-top:30px;
		margin-left:40%;
		font-size:20px;
		font-family:"Courier New", Courier, monospace;
		text-align:justify;
	}
	input{
		background-color:#FF3;
	}
</style>
</head>

<body>
<form action="Eliminar_Registro_Usuario.php"  method="get" name="eliminar_usuario">
	<table>
	<tr>
		<td><label>Nombre de usuario:</label></td>
        <td><input name="nombre_usuario" type="text"/></td>
	</tr>	
    <tr>
		<td><label>Edad de usuario:</label></td>
        <td><input name="edad_usuario" size="2" type="text"/></label></td>
	</tr>
	<tr>
    	<td><input name="Borrar Formulario" type="reset" value="Borrar" /></td>
		<td><input type="submit" name="eliminar_usuario" value="Eliminar Usuario" /></td>
	</tr>
    </table>
</form>
</body>
</html>