<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Subir Archivos BLOB a Servidor</title>
<style>
	table{
		margin:auto;
	}
</style>
</head>

<body>

<form action="datosBLOB.php" method="POST" enctype="multipart/form-data" >
<table>
	<tr>
    	<td>
        	<label for="archivo">Archivo:</label>
        </td>
    	<td>
        	<input type="file"  name="archivo" size="50" id="archivo"/> 
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
