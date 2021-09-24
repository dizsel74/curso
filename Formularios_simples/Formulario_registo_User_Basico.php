<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registro LOGIN</title>
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
<form action="Insertar_Registro_Usuario.php"  method="get" name="registro_usuario">
	<table>
	<tr>
		<td><label>Nombre de usuario:</label></td>
        <td><input name="nombre_usuario" type="text"/></td>
	</tr>
	<tr>
		<td><label>Clave de usuario:</label></td>
        <td><input name="clave_usuario" type="password"/></label></td>
	</tr>
    <tr>
		<td><label>Edad de usuario:</label></td>
        <td><input name="edad_usuario" size="2" type="text"/></label></td>
	</tr>
	<tr>
    	<td></td>
		<td><input type="submit" name="registro_usuario" value="Enviar Registro" /></td>
	</tr>
    </table>
</form>
</body>
</html>