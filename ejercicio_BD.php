<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio Base de Datos</title>
<style>
table{
	width:40%;
	border:2px solid #C33;
	text-align:left;
}
</style>
</head>

<body>

<?php
	/*$db_host="localhost";
	$db_nombre="usuarios";
	$db_usuario="root";
	$db_clave="";*/
	require("Conexion_BD.php");
	
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conectarte a la BD
	//$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave,$db_nombre);  //conectarte a la BD
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	
 		exit();
 	}
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");
	mysqli_set_charset($db_conexion, "utf8"); //lea caracteres latinos acentos y Ñ
	

     $query="SELECT * FROM calificaciones WHERE Tarea1"; //Query de seleccion 
	 
	 $resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	 
	
	// while(($fila=mysqli_fetch_row($resultado_query))==true){
		  while(($fila=mysqli_fetch_array($resultado_query,MYSQLI_ASSOC))==true){
	 //$fila=mysqli_fetch_row($resultado_query); // Guardas datos linea por linea de la tabla y hace un array
	 echo "<table><tr><td>";
	  // echo $fila[0]."</td><td>". $fila[1]. " </td><td>" . $fila[5]. "</td>";
	  echo $fila['Nombre']."</td><td>". $fila['Email']. " </td><td>" . $fila['Total']. "</td>";
	 echo"</table>";
	
	 }
	 
	 mysqli_close($db_conexion); //CERAR CONEXION
	 
?>
</body>
</html>