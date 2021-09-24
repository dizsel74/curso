<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar en BD en 1 pagina</title>
<?php

function ejecuta_consulta($labusqueda){
	
	
	require("Conexion_BD.php");
	
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	if(mysqli_connect_errno()){
 				echo "Fallo de conexion con BD";
				 exit();
 	}
			
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //lea caracteres latinos acentos y Ñ
	

     $query="SELECT * FROM calificaciones WHERE Nombre LIKE '%$labusqueda%'"; //Query de seleccion  con los % busca lo que este antes de  y lo despueds de bula variable busqueda
	 
	 $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	 
	
		  while(($fila=mysqli_fetch_array($resultado_query,MYSQLI_ASSOC))==true){
	 echo "<table><tr><td>";
	  echo $fila['Nombre']."</td><td>". $fila['Apellidos']. " </td></td></tr><tr>" . $fila['Email']. " </td><td><label>Calificación: " . $fila['Total']. "</label></td>";
	 echo"</tr></table>";
	
	 }
	 
	 mysqli_close($db_conexion); //CERAR CONEXION
}
?>
</head>

<body>
<?php
	$mibusqueda=$_GET["buscar"];//captura el objeto html 
	//MANDA ERROR SOLO EN LOCAL EN LINE SE VA EL ERROS
	$mipag=$_SERVER["PHP_SELF"];// aqui mando a la misma pagina
	if($mibusqueda!=NULL){
		ejecuta_consulta($mibusqueda);
	}
	else{
		echo("<form action='".$mipag."' method='get'>
	 		<label>Buscar:<input name='buscar' type='text' /></label>
 			<input type='submit' name='enviado' value='pincha' /></form>");
	}
 ?>

</body>
</html>