<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operadores Matematicos 1/1</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<body>
<?php
	$num_aleatorio=rand(1,5);
	echo "<p> Numero aleatorio es $num_aleatorio</p>";
	$redondeo=2.6;
	echo "<p> Numero redondeado ". round($redondeo). "</p>";
	//Castin explicito en PHP
	$numtexto ="9";
	$resultadoEntero=(int)$numtexto;
	echo "Es un numero Entro ". $numtexto ." es un nuemro de texto " . $resultadoEntero."<br>";
	echo "<p>::PRIORIDAD DE OPERADORES:: <br>";
	
	$variable1=true;
	$variable2=false;
	$variablesResultado= ($variable1 AND $variable2) ; //&& no need of (), AND needs () to work la comparación
	if ($variablesResultado == true){
	echo "Resultado de la prioridad de los operadores matematicos es True : ". $variablesResultado. " </p>";
	}else{
		echo "El Resultado es False  </p>";
	}
?>

<form action="" method="post" id"form">
<input name="num1" type="text" size="10" maxlength="10" id="num1"/>
<input name="num2" type="text" size="10" maxlength="10" id="num2"/>
<select name="operacion" id="operacion" >
	<option>Suam</option>
    <option>Resta</option>
    <option>Div</option>
    <option>Mod</option>
    <option>Mul</option>
</select>

<input name="boton" type="submit" id="boton" value="Enviar" onclick="prueba"/>

</form>

  <?php
  
  if (isset($_POST["boton"])){
	  $num1=$_POST["num1"];
	  $num2=$_POST["num2"];
	  $operacion=$_POST["operacion"];
	  
 	 if (!strcmp("Suam",$operacion)){
   			echo "<br> La Suma es: " . ($num1+$num2);
  	}
	if (!strcmp("Resta",$operacion)){
   			echo "<br> La Resta es: " . ($num1-$num2);
  	}
	if (!strcmp("Div",$operacion)){
   			echo "<br> La Div es: " . ($num1/$num2);
  	}
	if (!strcmp("Mod",$operacion)){
   			echo "<br> Modulo es: " . ($num1%$num2);
  	}
	if (!strcmp("Mul",$operacion)){
   			echo "<br> Muntiplicacion es: " . ($num1*$num2);
  	}
	  
	 }
  
  ?>
   
</body>
</html>