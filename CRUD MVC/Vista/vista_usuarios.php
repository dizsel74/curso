<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>vista</title>

</head>

<body>

  <?php
  require("Modelo/paginacion.php");
  ?>


  <form name="form_nuevo" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <table width="50%" border="0" align="center">
      <tr>
        <td class="primera_fila">Id</td>
        <td class="primera_fila">Nombre</td>
        <td class="primera_fila">Apellido</td>
        <td class="primera_fila">Dirección</td>
        <td class="primera_fila">Fotografia</td>
        <td class="sin">Borrar</td>
        <td class="sin">Actualizar</td>
        <td class="sin"></td>
      </tr>

      <?php

      foreach ($filas as $registros) :
      ?>
        <tr>
          <td><?php echo $registros["id"] ?></td>
          <td><?php echo $registros["nom"] ?></td>
          <td><?php echo $registros["ape"] ?></td>
          <td><?php echo $registros["direccion"] ?></td>
          <td><img src="<?php echo $registros["foto"]; ?>" width=40%></a></td>

          
          <td class="bot">
            <a href="?Id=<?php echo $registros["id"]; ?>">
              <input type='button' name='del' id='del' value='Borrar'>
            </a>
          </td>
          <!--<td class="bot">
            <a href="borrar.php?Id=<?php // echo $registros["id"]; ?>">
              <input type='button' name='del' id='del' value='Borrar'>
            </a>
          </td>
         <td class="sin">
            <a href="editar.php?Id=<?php //echo $registros["id"]; ?> & nom=<?php //echo $registros["nom"]; ?> & ape=<?php //echo $registros["ape"]; ?>& dir=<?php //echo $registros["direccion"]; ?>">
              <input type='button' name='up' id='up' value='Actualizar'>
            </a>
          </td>-->
         
            
        
          
          <td class="sin">
            <a href="editar.php?Id=<?php echo $registros["id"]; ?> & nom=<?php echo $registros["nom"]; ?> & ape=<?php echo $registros["ape"]; ?>& dir=<?php echo $registros["direccion"]; ?>">
              <input type='button' name='up' id='up' value='Actualizar'>
            </a>
          </td>

          <td class="sin"></td>
        </tr>

      <?php
      endforeach;
      ?>

      <tr>
        <td></td>
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name='Dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='nuevo' id='nuevo' value='Insertar'></td>
      </tr>
      <tr>
        <td colspan="4">
          <?php
          /*------------ INICIO  DATOS  PAGINACION -------------*/
          echo "Total de registros " . $numero_registros . " se muestran " . $registros_por_pagina . " por página <br/>";
          //echo "Pagina ".$pagina ." de ". $total_paginas. "<br/>";
          /*--------------INICIO NUM DE PAGINAS ----------------*/
          for ($i = 1; $i <= $total_paginas; $i++) {
            echo " <a  href='?pagina=" . $i . "'>" . $i . "</a> ";
          }
          /*--------------FIN NUM DE PAGINAS ----------------*/
          echo "<br />Pagina " . $pagina . " de " . $total_paginas . "<br/>";
          
          ?>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>