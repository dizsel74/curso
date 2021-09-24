<?php
try{
    require ("conexion.php");
 /*------------------ INICIO  PAGINACION ---------*/
    $registros_por_pagina=10;

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

    $query="SELECT *  FROM calificaciones "; //SIRVE PARA SACAR LOS DATOS INICIALES 
    $fila=$conexion_BD->prepare("$query"); // LO PREPARA
    $fila->execute(array()); //LO EJECUTA

    $numero_registros=$fila->rowCount();//CUANTOS REGISTROS HAT EN BBDD
    $total_paginas=ceil($numero_registros/$registros_por_pagina); //CALCULA # DE PAGINAS A USAR

/*------------------------ FIN PAGINACION -------------*/

/*------------ INICIO  DATOS  PAGINACION -------------*/  
echo "Total de registros en BD " . $numero_registros. "<br/>";
    echo "Se muestran ".$registros_por_pagina." por página <br/>"; 
    echo "Pagina ".$pagina ." de ". $total_paginas. "<br/>";
/*----------------- FIN DATOS  PAGINACION -------------*/
    echo "<table>";	
        
    echo "<tr><td><label> Nombre </label></td>
              <td><label> Apellidos </label></td>
              <td><label> Institución </label></td>
              <td><label> Email </label></td>";

   
/* SEGUNDO QUERY ES EL QUE GENERA LA PAGINACION YA CON EL LIMITE*/

    $query_limite="SELECT Nombre, Apellidos, Institución, Email  FROM calificaciones LIMIT $inicio_desde,$registros_por_pagina"; //USA EL LIMITE PARA CONSTRUIR LA PAGINACION
    $fila=$conexion_BD->prepare("$query_limite");//LO PREPARA
    $fila->execute(array());//LO EJECUTA

     while($linea=$fila->fetch(PDO::FETCH_ASSOC)){
   
        echo "<tr><td>". $linea['Nombre']. "</td>";
        echo"<td>". $linea['Apellidos']. "</td>";
        echo"<td>". $linea['Institución'].  "</td>";
        echo "<td>". $linea['Email'].  "</td></tr>";
    
    }//while*/
    echo "</table><br/>";



    $fila->closeCursor();// CIERRE DE CURSOR
}catch(Exception $e){
    echo "ERROR EN LINEA-> ". $e->getLine();
   // die ("¡UPS!". $e->getMessage());

}
/*--------------INICIO NUM DE PAGINAS ----------------*/
for ($i=1; $i<=$total_paginas; $i++){ 
    
    echo " <a  href='?pagina=".$i."'>".$i."</a> ";

}
/*--------------FIN NUM DE PAGINAS ----------------*/

?>