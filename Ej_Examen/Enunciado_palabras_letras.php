<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
/*funcion que toma un enunciado (arreglo) y lo divide en sub enunciados (arregros) 
	separandolos en los puntos gramaticales <.?!> luego vuelve a subdividirlo en palabras
	contando cada palabra que hay en los enunciados*/

function solution($s){
	
	echo "The sentence : $s has the follow sub sentences. <br><br>";
	
	$num=1; //contador de palabras inicia en 1 
	$total=0;
	$s= str_replace('?','.',$s); //remplaza caracteres de puntuación final < ?! > por <.> para separar los enunciados
	$s= str_replace('!','.',$s);
	
	$s= str_replace('¡','',$s);//remplaza los demas signos ortograficos por espacios en blanco para separar por palabra
	$s= str_replace('¿','',$s);
	$s= str_replace(',','',$s);
	$s= str_replace(';','',$s);
	$s= str_replace(':','',$s);

	foreach(explode( '.', $s) as $index){ //($r=explode( '.', $s)as $index) //busca punto y separa en enunciados 
	 	$contador=0;
		
 			foreach (explode(' ',$index )as $index2){ // separa los enunciados en palabras
				
				if(!empty($index2)){//no cuenta espacion en blanco al inicio o final
					$contador ++;
					$numLetras= strlen($index2);
			        $total = $total+$numLetras;
				}
				//else{
				//}//else	
	 		
			}//foreach
		
		echo "Sentence No. ".$num." < ".$index." > it has < ".$contador." > words in it and each word has < ".$total." > letters in it.<br>";
		//echo "Sentence ".$num.":< ".$index." > has <".$contador." > sentences and each sentence has this number of letter".strlen($index2)."<br>";//total incuyendo espacios
		$num++;
		$numLetras=0;
		$total=0;
		
	}//foreach
		
		
}//function

$="We test coders. Give us a try? ¡Hola! ¿como; estan todos? : op , ";
solution($s);





?>
<body>
</body>
</html>