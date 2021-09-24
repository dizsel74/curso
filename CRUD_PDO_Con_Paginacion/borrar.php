<?php

 include("conexion.php");
 $id_borrar=$_GET["Id"];
 $conexion_BD->query("DELETE FROM datos_usuarios WHERE id='$id_borrar'");
 header("Location:index.php");

?>