<?php
try{
    require("datosConexion.php");
    $conexion_BD=new PDO($host, $usuario,$clave);
	$conexion_BD->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //gestion de error para poder verlos
	$conexion_BD->exec("SET CHARACTER SET utf8");

}catch(Exception $e){
    echo "ERROR EN LINEA-> ". $e->getLine();
    die ("UPS!". $e->getMessage());
}
?>