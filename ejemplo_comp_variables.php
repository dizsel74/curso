<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comparacion de Variables</title>
</head>

<body>
<?php
 $variable1=8;
 $variable2="8";
 $variable3="Art";
 
 if($variable1<>$variable2){ // == ve si son iguales pero no ve si el tipo coincide  === ve si son iguales y del mismo tipo
	 echo "Son iguales";
 }else{
	 echo "No son iguales";
	 }

?>
</body>
</html>