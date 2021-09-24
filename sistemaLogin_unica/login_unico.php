<!DOCTYPE HTML>
<html>
<HEAD>
<TITTLE>

<style>
	h1, h2{
		text-align:center;
	}
	table{
		margin:auto;
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	.izq{
		text-align:right;
	}
	.der{
		text-algn:left;
	}
	td{
		text-align:center;
		padding:10px;
	}
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}

	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}
</style>

</TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>
<BODY bgcolor="#CCCCCC">
<?php
if(isset($_POST["enviar"]))	{ //nombrar el nombre del boton
	try{
		$conexion=new PDO("mysql:host=localhost; dbname=usuarios" , "root","");
		$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexion->exec("SET CHARACTER SET utf8");

		$sql="SELECT * FROM ususerios_pass WHERE usuario=:login AND contraseña=:clave";

		$resultado=$conexion->prepare($sql);

		$login=htmlentities(addslashes($_POST["login"]));
		$clave=htmlentities(addslashes($_POST["clave"]));

		$resultado->bindValue(":login",$login);
		$resultado->bindValue(":clave",$clave);

		$resultado->execute();

		$numero_registro=$resultado->rowCount();

		if($numero_registro!=0){
			session_start();
			$_SESSION["usuario_logeado"]=$_POST["login"];
		}
		else{
			echo "<h2>error de usuario</h2>";
		}
	}
	catch(Exception $e){
		die("ERROR: ". $e->getMessage());
	}
}
?>
<?php 
	if(!isset($_SESSION["usuario_logeado"])){
		include("form.html");
	}else{
 		echo "<h1>Hola ".$_SESSION['usuario_logeado']." usuario registrado</h1>";
		
	}
?>

<br>
<h2>Contenido de la pagina</h2>
<table width="100" border="1">
  <tr>
    <td><img src="imagenes/1.jpg" width="303" height="301" alt="" longdesc="imagenes/1.jpg"></td>
    <td><img src="imagenes/2.jpg" width="303" height="301" alt="" longdesc="imagenes/2.jpg"></td>
  </tr>
  <tr>
    <td><img src="imagenes/3.jpg" width="303" height="301" alt="" longdesc="imagenes/3.jpg"></td>
    <td><img src="imagenes/4.png" width="303" height="301" alt="" longdesc="imagenes/4.png"></td>
  </tr>
</table>
<p>puedes seguir tu camino</p>
<table width="295" border="1">
  <tr cols>
    <td colspan="3">Zona Registrado1</td>
  </tr>
  <tr>
    <td width="59" height="133"><a href="Usuario_Registrado2.php">PAg2</a></td>
    <td width="109"><a href="Usuario_Registrado3.php">pag3</a></td>
    <td width="105"><a href="Usuario_Registrado4.php">pag4</a></td>
  </tr>
</table>

<p><a href="cierre.php">salir</a></p>
</BODY>
</html>
