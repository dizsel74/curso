<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buscar 2/2 stmt</title>
</head>

<body>
<h2> BUSQUEDA 2/2 PAGINAS preparadas</h2>
<?php
	//$busqueda=$_GET["buscar"];
	
	require("Conexion_BD.php");
	
	$db_conexion=mysqli_connect($db_host,$db_usuario,$db_clave);  //conecta a la BD
	
	$busqueda=mysqli_real_escape_string ($db_conexion,$_GET["buscar"]); //evita la inyección ya no seria necesario se puede usar el basico
	
	 if(mysqli_connect_errno()){
 		echo "Fallo de conexion con BD";
	 exit();
 	}
	
	mysqli_select_db($db_conexion,$db_nombre) or die("No se localizo la Base de Datos");//aqui se conecta
	mysqli_set_charset($db_conexion, "utf8"); //lea caracteres latinos acentos y Ñ
	
	
    
	//$query="SELECT Nombre, Apellidos, Email, Total FROM calificaciones WHERE Nombre LIKE '%$busqueda%'"; //Query
	
	$query="SELECT Nombre, Apellidos, Email, Total FROM calificaciones WHERE Nombre=?";// 1 uso del simbolo de ? 
	
	 //$query="SELECT Nombre, Apellidos, Email, Total FROM calificaciones WHERE Nombre LIKE ? ";// 1 uso del simbolo de ? 
	
	 //$resultado_query=mysqli_query($db_conexion,$query); //Guardas el resultado del query
	  $resultado_query=mysqli_prepare($db_conexion,$query);  //2do prepara el stmt usando prepare
	 
	  $ok=mysqli_stmt_bind_param($resultado_query,"s",$busqueda);  // 3er paso unes al stmt con el tipo de dato(string o numerico) y el dato buscado
	  
	  $ok=mysqli_stmt_execute($resultado_query); //4to ejecuta el query
	  	
		if($ok==false){
			echo "No tuvo &eacute;xito la consulta";
		}else{
			
			$ok= mysqli_stmt_bind_result($resultado_query, $nombre,$ape,$correo,$cal_final); //5to asocial el resutado del query 
			
			echo"Datos encontrados<br><br>";
			
			while(mysqli_stmt_fetch($resultado_query)){  //6to ya se lee linea por linea
				echo"<table>";
	  			
				echo "<tr><td><label> Nombre </label></td>"; 
				echo "<td>". $nombre . "</td></tr>";
	  	        
				echo " <tr><td><label> Apellido </label></td>";
	  		    echo"<td>". $ape. "</td></tr>";
	  	        
				echo " <tr><td><label> Correo </label></td>";
	  		    echo"<td>". $correo.  "</td></tr>";
		
		        echo " <tr><td><label> Calificación Final </label></td>";
	  		    echo"<td>". $cal_final. "</td></tr>";
			
			 echo "</table><br>";
				
			}
			mysqli_stmt_close($resultado_query);
			
		}
	
		 /* while(($fila=mysqli_fetch_array($resultado_query,MYSQLI_ASSOC))==true){
			echo"<table>";
	  			
				echo "<tr><td><label> Nombre </label></td>"; 
				echo "<td>". $fila['Nombre']. "</td></tr>";
	  	        
				echo " <tr><td><label> Apellido </label></td>";
	  		    echo"<td>". $fila['Apellidos']. "</td></tr>";
	  	        
				echo " <tr><td><label> Correo </label></td>";
	  		    echo"<td>". $fila['Email'].  "</td></tr>";
		
		        echo " <tr><td><label> Calificación Final </label></td>";
	  		    echo"<td>". $fila['Total']. "</td></tr>";
			
			 echo "</table><br>";
	
	 }*/
	 
	 mysqli_close($db_conexion); //CERRAR CONEXION
	
	
	 
?>
</body>
</html>