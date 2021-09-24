<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<h1></h1>
<BODY>
<?php /*Generamos sesion*/
	session_start();
if(isset($_SESSION["usuario_logeado"])){
}else{
header("location:login_unico.php");// Redirecciona al login infinitamente
}
?>
<?php
echo "<h1>Hola ".$_SESSION['usuario_logeado']." usuario registrado</h1>";

?>

<p>puedes seguir tu camino</p>
<table width="295" border="1">
  <tr cols>
    <td colspan="3">Zona Registrado1</td>
  </tr>
  <tr>
    <td width="59" height="133"><a href="login_unico.php">inicio</a></td>
    <td width="109"><a href="Usuario_Registrado3.php">pag3</a></td>
    <td width="105"><a href="Usuario_Registrado4.php">pag4</a></td>
  </tr>
</table>

<p><a href="cierre.php">salir</a></p>
</BODY>
</HTML>
