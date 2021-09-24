<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Constantes</title>
  <script type="text/javascript">
    function MM_jumpMenu(targ, selObj, restore) { //v3.0
      eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
      if (restore) selObj.selectedIndex = 0;
    }
  </script>
</head>

<body>
  <?php
  define("AUTOR", "Arturo", true);

  echo "El Autor es: " . AUTOR;

  echo "<br>La linea de la instriccion es " . __LINE__ . "<br>";
  echo " El Arvivo es : " . __FILE__;
  echo " <br>El Arvivo es : " . __DIR__;


  ?>


</body>

</html>