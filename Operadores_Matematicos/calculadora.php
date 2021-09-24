<style>
	.resultado{
		color:#0FF;
		font-size:36px;
		font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	}




</style>
<?php
  
 /*if (isset($_POST["boton"])){
	  $num1=$_POST["num1"];
	  $num2=$_POST["num2"];
	  $operacion=$_POST["operacion"];
	  
	  calcula($operacion); //aqui se llama a la funcion porque ya capturo todos los datos del formulario
  }
  
  
*/
 
function calcula($calculo){
	
		global $num1, $num2;

 	if (!strcmp("Suma",$calculo)){
		 //global $num1;
		 //global $num2;
		 $resultado= $num1+$num2;
   			
			echo "<p class='resultado'>La Suma es: $resultado </p>";
			//echo "<br>La Suma es: " . ($num1+$num2);
  	}
	if (!strcmp("Resta",$calculo)){
		 $resultado= $num1-$num2;
		//global $num1 , $num2;
   			echo "<p class='resultado'> La Resta es: $resultado";
  	}
	if (!strcmp("Div",$calculo)){
		//global $num1 , $num2;
   			echo "<br> La Div es: " . ($num1/$num2);
  	}
	if (!strcmp("Mod",$calculo)){
		//global $num1 , $num2;
   			echo "<br> Modulo es: " . ($num1%$num2);
  	}
	if (!strcmp("Mul",$calculo)){
		//global $num1 , $num2;
   			echo "<br> Muntiplicacion es: " . ($num1*$num2);
  	}
	if (!strcmp("Inc",$calculo)){
		//global $num1;
		$num1++;
		$resultado=$num1;
   			echo "<br> Incremento es: " . $resultado;
  	}
	if (!strcmp("Dec",$calculo)){
		//global $num1;
		$num1--;
		 $resultado=$num1;
   			echo "<br> Decremento es: " . $resultado;
  	}
	  
}
  
?>
   