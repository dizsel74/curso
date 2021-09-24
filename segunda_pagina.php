<HTML>
<HEAD>
<TITTLE>  </TITLE>
</HEAD>
<BODY>
<?PHP 
 $nombre="juan";
 $edad=18;
 print "el nombre del usuario es: $nombre <br />";
 print "el nombre del usuario es: " . $nombre ."<br />";
 echo "el nombre del usuario es:" . $nombre . " y tiene ". $edad . " años. <br />" ;
 echo $nombre, $edad;
 print $edad; // solo una linea acepta y es mas lento
?>
</BODY>
</HTML>