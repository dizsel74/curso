<?php
    require_once("Modelo/modelo_calificaciones.php");
    
    $calificaciones = new Calificaciones_modelo();
    $matriz_Calificaciones = $calificaciones->get_calificaciones();

    require_once("Vista/vista_calificaciones.php");

?>
