<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<BODY>
<?PHP 
function incrementaVariable(){
	static $contador=0;
	
	
	echo $contador . "<br>";
	$contador++;
}

	incrementaVariable();
	incrementaVariable();
?>

</BODY>
</HTML>