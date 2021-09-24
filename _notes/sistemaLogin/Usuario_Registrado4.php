<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<BODY>
<?php
session_start();
if(isset($_SESSION["usuario_logeado"])){
}else{
	header("location:login.php");// Redirecciona al login infinitamente
}
?>
<?php
echo "<h1>Hola".$_SESSION['usuario_logeado']." usuario registrado</h1>";

?>

<p>puedes seguir tu camino 4</p>
<table width="295" border="1">
  <tr cols>
    <td colspan="3">Zona Registrado1</td>
  </tr>
  <tr>
    <td width="59" height="133"><a href="Usuario_Registrado.php">PAg1</a></td>
    <td width="109"><a href="Usuario_Registrado2.php">pag2</a></td>
    <td width="105"><a href="Usuario_Registrado3.php">pag3</a></td>
  </tr>
</table>
<p><a href="cierre.php">salir</a></p>
</BODY>
</HTML>