<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
/*Sirve para cerra las sesiones*/
    
	session_start(); //inicia sesion
    session_destroy();//cierra sesion
    header("location:login_unico.php");// redirecciona

 ?>
<body>
</body>
</html>
