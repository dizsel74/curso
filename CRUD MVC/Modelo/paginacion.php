<?php
/*------------------ INICIO  PAGINACION ---------*/
require_once("conectar.php");
include("querys.php");

$registros_por_pagina=8;
$conexion_BD_paginacion=Conectar::conexion();



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

$fila=$conexion_BD_paginacion->prepare("$slct_usuarios"); // LO PREPARA

$fila->execute(array()); //LO EJECUTA

$numero_registros=$fila->rowCount();//CUANTOS REGISTROS HAT EN BBDD

$total_paginas=ceil($numero_registros/$registros_por_pagina); //CALCULA # DE PAGINAS A USAR

/*------------------------ FIN PAGINACION -------------*/


    
?>