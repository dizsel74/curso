<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elije Idioma Cookie</title>
</head>

<body>
<h1>Elije tu idioma</h1>
<?php
/*REdirecciona en caso de tener la cookie manda a la pagina de la elección anterior del usuario evitando volver a seleccionar si ya caduco la cookie va a entrar*/
 if (isset($_COOKIE["idioma_elejido"])){
	 
 	if($_COOKIE["idioma_elejido"]=="es"){
		header("location: esp.php");
	}
 	else if($_COOKIE["idioma_elejido"]=="in"){
		header("location: ing.php");
	}
 }
?>
<table width="200" border="1" align="center">
  <tr>
    <td><a href="creaCookie.php?idioma=es"><img src="../img/mex.jpg" width="269" height="187" alt="mexico" /></a></td>
    <td><a href="creaCookie.php?idioma=in"><img src="../img/usa.jpg" width="251" height="201" alt="USA" /></a></td>
  </tr>
  <tr>
    <td>Español</td>
    <td>English</td>
  </tr>
</table>

</body>
</html>
