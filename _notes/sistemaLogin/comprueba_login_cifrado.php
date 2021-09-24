<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<BODY>
<?php
try{
	$conexion=new PDO("mysql:host=localhost; dbname=usuarios" , "root","");
	$conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conexion->exec("SET CHARACTER SET utf8");

	$sql="SELECT * FROM datos_usuario WHERE nombre=:login AND clave=:clave";

	$resultado=$conexion->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));
	$clave=htmlentities(addslashes($_POST["clave"]));

	$contador=0; //parte de la decodificación

	$resultado->bindValue(":login",$login);
	$resultado->bindValue(":clave",$clave);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if($numero_registro!=0){
		session_start();
		$_SESSION["usuario_logeado"]=$_POST["login"];
		$_SESSION["usuario_clave"]=$_POST["clave"]; // solo de ejercicio hayq uq quitar
		header("location:Usuario_Registrado.php");
	}
	else{
		header("location:login_cifradophp"); // Redirecciona al login infinitamente
	}


}
catch(Exception $e){
	die("ERROR: ". $e->getMessage());
}


?>
</BODY>
</HTML>
