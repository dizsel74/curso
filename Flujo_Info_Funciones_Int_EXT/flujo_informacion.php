<HTML>
<HEAD>
<TITTLE> llamadas a funcione interna y externa </TITLE>
</HEAD>
<BODY>
<?PHP 
include ("llamada.php");
?>
<?PHP
 $nombre="flujo";
 $edad=18;
  echo "Nombre de una variable: $nombre <br />";
  echo "<br> 1. Antes de funcion: " . $nombre ."<br />";
//dameDatos();
 function dameDatos(){
	 echo "<br> 2. Dentro de la funcion:"  . /*$nombre .*/"<br />";
 }
  dameDatos();
	echo "<br> 3.Despues de funcion: " . $nombre ."<br />";
  //dameDatos();
?>
HOLA <br>
<?php
dameDatos2();
?>
</BODY>
</HTML>