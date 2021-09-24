<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
function solution($A) {
	//$array = array(1, 2, 3, 4);
	$array=array ($A);
	//echo $A;
foreach ($array as &$valor) {
    $valor = $valor * 2;
	echo $valor;
}
//echo $array ahora es array(2, 4, 6, 8)
unset($valor);


	//$str=str_replace(",","",$A);
	//echo strlen($A);
	//echo strlen($str);
    // write your code in PHP7.0
	
	$B = [];
    foreach($A as $a){ 
        if($a > 0) $B[] = $a;   
    }

    $i = 1;
    $last = 0;
    sort($B);

    foreach($B as $b){

        if($last == $b) {
			$i--;
		}
        else if($i != $b){
			 return $i;
		}
        $i++;
        $last = $b;        

    }

	echo $i;
    return $i;
	
	
}

solution (8,3,6,4,2,3);

/*This is a demo task.

Write a function:

function solution($A);

that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1..100,000];
each element of array A is an integer within the range [−1,000,000..1,000,000].*/
?>
<body>
</body>
</html>
