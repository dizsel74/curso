<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Operadores Matematicos 1/2</title>

</head>
<body>

<form action="" method="post" id"form"> 
<input name="num1" type="text" size="10" maxlength="10" id="num1"/>
<input name="num2" type="text" size="10" maxlength="10" id="num2"/>
<select name="operacion" id="operacion" >
	<option>Suma</option>
    <option>Resta</option>
    <option>Div</option>
    <option>Mod</option>
    <option>Mul</option>
    <option>Inc</option>
    <option>Dec</option>
</select>

<input name="boton" type="submit" id="boton" value="Enviar" onclick="prueba"/>

</form>

 <?php
 include ("calculadora.php");

	if (isset($_POST["boton"])){
	  $num1=$_POST["num1"];
	  $num2=$_POST["num2"];
	  $operacion=$_POST["operacion"];
	
	  calcula($operacion); //aqui se llama a la funcion porque ya capturo todos los datos del formulario
	  //<form action="calculadora.php" method="post" id"form"> se quita el llamado en el formulario al archivo php
  } 
  ?> 
</body>
</html>