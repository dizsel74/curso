<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subir Imagenes Servidor</title>
<style>
	table{
		margin:auto; background-color:#939;
	}
</style>
</head>

<body>

<form action="datosImagen.php" method="POST" enctype="multipart/form-data" >
<table>
	<tr>
    	<td>
        	<label for="imagen">Imagen:</label>
        </td>
    	<td>
        	<input type="file"  name="img" size="50" id="img"/> 
        </td>
	</tr>
    <tr>
    	<td colspan="2" style="text-align:center">
        	<input type="submit"  value="CARGAR" name="cargar"/>
        </td>
    </tr>
</table>

</form>  

</body>
</html>
