<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<BODY>
<?PHP 
 $nombre="Juan";
	
	include("llamada.php");
	dameDatos2();

function dameDatos3(){
	global $nombre;
	 echo "<br>La variable ".$nombre." esta dentro del archivo original que esta llamando  a la  variable 'Global' desde la funcion dameDato3<br />";
 }
  dameDatos3();
?>
</BODY>
</HTML>