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
		padding:5px;
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
$autenticado=false;

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

		if($numero_registro!=0){ //si encuentra el usuario avanza con la sesion

			$autenticado=true; //ya se ha logeado

			if(isset($_POST["recordar"])){ //enta solo si verifico la casilla y crea la cookie
				setcookie("nombre_usuario",$_POST["login"],time()+500);
				}
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
	if($autenticado==false){
		if(!isset($_COOKIE["nombre_usuario"])){
			include("form.html");
		}
	}
	if(isset($_COOKIE["nombre_usuario"])){// verifica si hay COOKIE
	
		echo "Hola ".$_COOKIE["nombre_usuario"]." galleta";
		
	}else if($autenticado==true){//  verifica si se logearon
	
		echo "Hola ".$_POST["login"]." logeado";
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
<?php
	if($autenticado==true || isset($_COOKIE["nombre_usuario"])){ //ve si el login se realizo o si tiene una cookie
			include ('zona_Registrados.html');
	}
?>

<p><a href="destrulle_cookie.php">Salir y eliminar cookie</a></p>
</BODY>
</html>
