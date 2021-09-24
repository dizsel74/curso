<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conexion PDO</title>
</head>

<body>
<?php
	try{
		$conectar_BD = new PDO('mysql:host=localhost; dbname=usuarios', 'root', '');
		echo "Conexion OK";
		
	}catch(Exception $mensaje_error){
		die('Error :' .$mensaje_error->GetMessage());
	
	}finally {
		$conectar_BD=null;
	}

?>
</body>
</html>