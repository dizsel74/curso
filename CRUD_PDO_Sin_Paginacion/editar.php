<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>
<?php
  include("conexion.php");

 if(!isset($_POST['bot_actualizar'])){   
      //informacion de 1era vez  proveniente de la pagina index////
      $id_actualizar=$_GET["Id"];
      $nombre_actualizar=$_GET["nom"];
      $apellido_actualizar=$_GET["ape"];
      $direccion_actualizar=$_GET["dir"];
 }
 else{                                
       //informacion de 2da1 vez  proveniente de la pagina interna editar////
      $id=$_POST['id'];
      $nom=$_POST['nom'];
      $ape=$_POST['ape'];
      $dir=$_POST['dir'];

      $query="UPDATE datos_usuarios SET  nom=:NOM, ape=:APE, direccion=:DIR WHERE id=:ID ";
      $resultado=$conexion_BD->prepare($query);
      $resultado->execute(array(":ID"=>$id, ":NOM"=>$nom, ":APE"=>$ape, ":DIR"=>$dir));

      header("Location:index.php");
   } 
 
?>
<h1>ACTUALIZAR</h1>

<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> <!--- enviar en el mismo lugar -->
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id" value="<?php echo $id_actualizar; ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre_actualizar; ?>"></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><label for="ape"></label>
      <input type="text" name="ape" id="ape" value="<?php echo $apellido_actualizar; ?>"></td>
    </tr>
    <tr>
      <td>Dirección</td>
      <td><label for="dir"></label>
      <input type="text" name="dir" id="dir" value="<?php echo $direccion_actualizar; ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>