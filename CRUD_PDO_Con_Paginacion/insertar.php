<?php
    include("conexion.php");

    $nombre_insertar=$_GET["Nom"];
    $apellido_insertar=$_GET["Ape"];
    $direccion_insertar=$_GET["Dir"];

    $conexion_BD->query("INSERT INTO datos_usuarios (nom, ape, direccion ) VALUES ('$nombre_insertar','$apellido_insertar','$direccion_insertar')");
   /* if($resultado_query==false){
		echo "Error";
	}else{
		echo "Un nuevo usuario se ha registrado <br><br>";
		echo"<table>
				<tr><td><label> Nombre</label> $nom</td></tr>";
		echo"<tr><td><label>Edad </label>$anos</td></tr>
			</table>";
	}
	
	mysqli_close($db_conexion);*/
    header("Location:index.php");
?>