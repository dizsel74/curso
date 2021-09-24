<?php

function triangulo($n){
	for($filas=0;$filas<=$n;$filas++){// recorre las filas
			for($espacio=1;$espacio<=$filas;$espacio++){//llena las columnas con espacios en blanco de cada fila
				echo "&nbsp";				
			}
			for ($columna=2*$filas;$columna<=$n*2;$columna++){//llena las columnas de la fila con *'s
				//echo"$columna";
				echo"*";
			}	
	echo "<br>"; //da el Salto de fila
	}
}

triangulo (5); //llamas a la funcion y pasassel parametro

/*




/*echo "<br>/2///////////////////////<br>";
for($e=8;$e>0;$e--){
		for($q=$e;$q<=8;$q++){
			echo"*"; //echo"$q";
		}
echo " ---  Cuando e vale  $e<br>";
	
}

echo "<br>/3///////////////////////<br>";
for($i=8;$i>0;$i--){
		for($j=$i;$j>0;$j--){
			//echo"$q";
			print "*";
		}
		//for($j=(2*$i); $j>0; $j--){
			for($e=8; $e>0; $e--){
			echo "$e";
			}
//echo " ---  Cuando e vale  $e<br>";
echo "<br>";
	
}
echo "<br>/4///////////////////////<br>";

for($e=0;$e<8;$e++){
		for($q=$e;$q<8;$q++){
			echo"*";
		}
echo " ---  Cuando e vale  $e<br>";
	
}
/*
function BinaryGap($n){
	echo "<br>El binario de $n es ".decbin($n)."<br>";
	
	$valor = decbin($n);
	
	echo $valor."<br>"; 
	
	//$longitud = strlen($valor);
	$ceros = explode("1", $valor);
	echo $ceros;
	echo"<br>************************<br>";
	//echo "Longitud ".$longitud;
	$count=0;
	foreach (count_chars($valor, 1) as $i => $val){
		
		if (chr($i)== 0){
			echo $count."/ <br>";
			$count++;
			echo $count."/ <br>";
		}
		echo $val . "---". chr($i)."<br>";
	
	}
	
	
	//foreach (){
		//$numero_ceros = $numeros_ceros + 1;
	//}
	
}
 
 BinaryGap(20);*/
?>