<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Destulle</title>
</head>

<body>
<?php
//echo $_COOKIE["idioma_elejido"];
$idioma_borrar=$_COOKIE["idioma_elejido"];

//echo "<br/> El idioma a borrar es: ".$idioma_borrar."<br>";

setcookie("idioma_elejido","$idioma_borrar",time()-60,"/curso/Sesion_cookie/practicas_cookie/");
header("Location:elije_idioma.php");
//echo "<br> eliminada";

?>
</body>
</html>