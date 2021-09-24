<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PDO Consulta Prep Select </title>
</head>

<body>
<h2> PDO BUSQUEDA  2/2 PAGINAS Preparadas</h2>
<?php
	$busqueda_nombre=$_POST['buscar_nombre'];
	
	//$busqueda_clave=$_POST['buscar_clave'];
	$busqueda_clave=$_POST['buscar_clave'];
	
	$contador=0;
	
	try{
		require("PDO_datos_conexion.php");
			/*$direccion="mysql:host=localhost; dbname=usuarios";
			$usuario="root";
			$clave="";*/
		
			//$contador=0;

		$conectar_BD = new PDO($direccion, $usuario, $clave);
			//$conectar_BD = new PDO('mysql:host=localhost; dbname=usuarios', 'root', '');
			//echo "Conexion OK";
		$conectar_BD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$conectar_BD->exec("SET CHARACTER SET utf8");

			//$query="SELECT * FROM datos_usuario WHERE nombre=?"; //Consulta preparada

		$query="SELECT * FROM datos_usuario WHERE nombre=:nom";
		//$query="SELECT * FROM datos_usuario WHERE nombre=:nom AND clave=:clave"; //solo sirve si las claves no estan cifradas
		
		
		$resultado_pdo_stmt=$conectar_BD->prepare($query);
		
		//$resultado_pdo_stmt->execute(array("$busqueda"));  // Consulta preparada
			
		//$resultado_pdo_stmt->execute(array(":nom"=>$busqueda_nombre, ":clave"=>$busqueda_clave)); //Array asociativo SOLO SIRVE SI CLÑAVE NO ES CUFRADA
		
		
		
		$resultado_pdo_stmt->execute(array(":nom"=>$busqueda_nombre));
		
		
		while($fila=$resultado_pdo_stmt->fetch(PDO::FETCH_ASSOC)){
			 		/* MODIFICARDO para mostrar cialquier cosa de una BD no usar para verificacion de cifradoS
					echo "<table>";	
					echo "<tr><td><label> Nombre </label></td>"; 
					echo "<td>". $fila['nombre']. "</td></tr>";
	  	        
					echo " <tr><td><label> Clave </label></td>";
	  		    	echo"<td>". $fila['clave']. "</td></tr>";
	  	        
					echo " <tr><td><label> Edad </label></td>";
	  		   		echo"<td>". $fila['Edad'].  "</td></tr>";
					echo "</table><br>";
					*/
					
					/* POR SI QUIERES PASAR EN UNA VAR EL HASH
					$hash=$fila['clave'];
					echo $hash ." hass<br>";*/
					
			///////////////  CIFRADO VERIFICACION /////////////////////////////		
			if( password_verify($busqueda_clave, $fila['clave'])){ //,$hash
				$contador++;
			}//if 
			/////////////////////////////////////////////////////////
			
		}//while
 ////////// PARA EJECUTAR DESPUES DE VERIFICAR CIFRADO///////////////////
	if($contador > 0){
		echo "verificado el cifrado y pasa usuario";
	 }else{
	echo "sin registro alguno y/o la clave no tiene cifrado";
  		 }
///////////////////////////////////////////////////////////////////////////


		$resultado_pdo_stmt->closeCursor();
		
	}catch(Exception $mensaje_error){
		
		die('UPS!:' .$mensaje_error->GetMessage() . " Esta en la linea " . $mensaje_error->getLine());
		
	
	} finally {
	
		$conectar_BD = null;
		
	}

?>
</body>
</html>