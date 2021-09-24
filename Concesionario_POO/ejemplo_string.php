<HTML>
<HEAD>
<TITLE>  </TITLE>
<style>
.resaltar{
	 color:#F00;
	 font-weight:bold;
}
</style>
</HEAD>
<BODY>

<?PHP 
	echo "<p class=\"resaltar\"> Esto es un ejemplo de frase</p>";
	echo "<p class='resaltar'> Esto es un ejemplo de frase</p>";
	echo '<p class="resaltar"> Esto es un ejemplo de frase</p>';
	$variable1="casa";
	$variable2="CASA";
	
	$resultado=strcmp($variable1,$variable2); // devuelve 1 no son iguales o 0 sis son verdad con strscasecmp no le importa si son mayusculas o minusculas
	echo "Resultado = " . $resultado. "<br>";
	if (!$resultado){
		echo $variable1 . " Si son iguales " . $variable2;
	}else{
		echo $variable1 . " NO Son iguales ". $variable2;
	}
	echo "<br> Esta es la variable que se cambi a minuscula $variable2 <br>";
	echo strtolower ($variable2);
	echo "<br> Esta es la variable que se cambi a Mayusculas $variable1 <br>";
	echo strtolower ($variable1);
	
	function suma($num1,$num2){
		$sumResultado = $num1 + $num2;
		return ($sumResultado);	
	}
	
	echo "<br> Resultado de suma es ". (suma(5,7)). " o " .suma(5,7);;
	
	echo "<p>---------------------FUNCION-------------------------</p>";
	
	function incrementar($param){
		$param++;
		return ($param);
	}
	$i=5;
	echo "el parametro de incremnto es ". incrementar($i). "<br>";
	echo $i;

echo "<p>-------------------CLASES ---------------------------</p>";

 class Coche{  //Clase  u Objeto tiene caracteristicas y funcionalidades
	 var $color;    //propiedad o caracteristica
	 var $ruedas;
	 function Coche(){  //Cuando una funcios es llamada igual que la clase es un costructoc o metodo constriuctor Da el ESTADO Inicial al OBJETO
	 	$this->color="";
		$this->ruedas=4;	 
	 }
	 function frena(){    //fubcionalidades
	 	echo "Fenando<br>";
	 }
	 function avanza (){
		 echo "Avanzando <br>";
	 }
	 
 }
 $reanult=new Coche();  // $instanncia / ejemplo   =   objeto
 
 $reanult->avanza();
 $reanult->frena();
 echo $reanult->ruedas;
 
 
?>

</BODY>
</HTML>