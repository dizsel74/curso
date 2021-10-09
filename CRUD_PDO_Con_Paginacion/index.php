<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD c/PAGINACION</title>

<link rel="stylesheet" type="text/css" href="hoja.css">

</head>

<body>

<?php

 
  include ("conexion.php");/*Conexion a la BD*/
/*-----------------------------------------------------*/

/*------------------ INICIO  PAGINACION ---------*/
$registros_por_pagina=4;

if(isset($_GET["pagina"])){ //EJECUTA SI EL USUARIO A PASADO EL PARAMETRO SIRVE PARA LA PAG 2 EN ADELANTE

    if($_GET["pagina"]==1){
        header("Location:index.php");//si hace click en 1
    }else{
        $pagina=$_GET["pagina"];//si hace click en otro num diferebte a 1
    }
}else{
  $pagina=1;
}

$inicio_desde=($pagina-1)* $registros_por_pagina;

$query="SELECT *  FROM datos_usuarios "; //SIRVE PARA SACAR LOS DATOS INICIALES 
$fila=$conexion_BD->prepare("$query"); // LO PREPARA
$fila->execute(array()); //LO EJECUTA

$numero_registros=$fila->rowCount();//CUANTOS REGISTROS HAT EN BBDD
$total_paginas=ceil($numero_registros/$registros_por_pagina); //CALCULA # DE PAGINAS A USAR

/*------------------------ FIN PAGINACION -------------*/
/*-----------------------------------------------------*/
/*------------ INICIO  DATOS  PAGINACION -------------*/  
echo "Total de registros en BD " . $numero_registros. "<br/>";
    echo "Se muestran ".$registros_por_pagina." por página <br/>"; 
    echo "Pagina ".$pagina ." de ". $total_paginas. "<br/>";
/*----------------- FIN DATOS  PAGINACION -------------*/
/* TRAE CADA arreglo con sus propiedades linea de registro de la tabl datos_Usuarios*/
  //  $query=$conexion_BD->query("SELECT * FROM datos_usuarios");
  //  $filas=$query->fetchAll(PDO::FETCH_OBJ); 

 $filas=$conexion_BD->query("SELECT * FROM datos_usuarios LIMIT $inicio_desde,$registros_por_pagina")->fetchAll(PDO::FETCH_OBJ); //simplificado lo anterior

 /*-------------INICIO- INSERT ------*/
if(isset($_POST["nuevo"])){ // si han pulsado el boton inser
  
  $nombre_insertar=$_POST["Nom"];
  $apellido_insertar=$_POST["Ape"];
  $direccion_insertar=$_POST["Dir"];

  $query="INSERT INTO datos_usuarios (nom, ape, direccion) VALUES (:NOM, :APE, :DIR)"; //CONSULTAS PREPARADAS

  $resultado=$conexion_BD->prepare($query);

  $resultado->execute(array(":NOM"=>$nombre_insertar, ":APE"=>$apellido_insertar, ":DIR"=>$direccion_insertar));

  header("Location:index.php");

}
/*------------------- FIN INSERT ---*/
?>

<h1>C.R.U.D.<span class="subtitulo">Create Read Update Delete</span></h1>

<form name="form_nuevo" method="POST"  action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table width="50%" border="0" align="center">
    <tr>
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">Borrar</td>
      <td class="sin">Actualizar</td>
      <td class="sin"></td>
    </tr> 
   
		<?php 
      foreach($filas as $lineas_tabla):
    ?>
   	<tr>
      <td><?php echo $lineas_tabla->id ?></td>
      <td><?php echo $lineas_tabla->nom ?></td>
      <td><?php echo $lineas_tabla->ape ?></td>
      <td><?php echo $lineas_tabla->direccion ?></td>
 
      <td class="bot"><a href="borrar.php?Id=<?php echo $lineas_tabla->id;?>"><input type='button' name='del' id='del' value='Borrar'></a></td>
      <td class="sin"><a href="editar.php?Id=<?php echo $lineas_tabla->id;?> & nom=<?php echo $lineas_tabla->nom; ?> & ape=<?php echo $lineas_tabla->ape; ?>& dir=<?php echo $lineas_tabla->direccion; ?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
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
        /*--------------INICIO NUM DE PAGINAS ----------------*/
        for ($i=1; $i<=$total_paginas; $i++){ 
          echo " <a  href='?pagina=".$i."'>".$i."</a> ";
        }
        /*--------------FIN NUM DE PAGINAS ----------------*/
      ?>
      </td>
  </tr>   
  </table>
</form>



<p>&nbsp;</p>
</body>
</html>