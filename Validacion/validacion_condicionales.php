<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
if(isset($_POST["enviando"])){ // si mando alfo el formulario entra
	
	$edad=$_POST["edad_usuario"]; // asigna a edad el valor del formulario
	
	$nombre=$_POST["nombre_usuario"];
	
	$contra =$_POST["contraseña_usuario"];
	
	//echo $nombre == "Arturo" && $edad=="42" ? "HOLA" : "ADIOS NO ERES"; //VALIDA USUARIO
	
	//CONDICIONADOR TERNARIO (condicion? Valor SI verdadero : Valor si FALSO)
	//echo $edad<18 ? "MENOR DE EDAD" : "MAYOR DE EDAD";
/*$ternario =  $edad > 0 && $edad<18 ? "MENOR DE EDAD" : "MAYOR DE EDAD";

	echo "<br>". $ternario;*/
	
	/*if($edad < 18){
		echo "Menor de edad";
	} else if ($edad >=18 && $edad < 65){
		echo " Adulto";
	}else {
		echo "Adulto mayor";
	}*/
	
	//SWITCH CASE
	 
	switch(true): //para validar edad
		case $edad <18:
			echo "Menor de edad";
			$i=0;
			while ($edad<18){
				echo "te falta tener  $edad años <br>";
				$edad ++;
				$i++;
			}
			echo " Para tener 18 años te falta $i años salio del while";
		break;
		case $edad <=64:
			echo "Adulto";
		break;
		default:
			echo "Adulto MAYOR";
	endswitch;
	

	/* para validar nombre y clave
	switch(true){ //:
		case $nombre=="Arturo" && $contra=="123":
			echo "Hola Arturo pasa";
		break;
		case $nombre=="Maria"  && $contra=="456":
			echo "Hola Maria pasa";
		break;
		case $nombre=="Juan" && $contra=="1010":
			echo "Hola Juan pasa";
		break;
		default:
			echo "no pasas";
	} //endswitch;
	*/
	
}
	
?>