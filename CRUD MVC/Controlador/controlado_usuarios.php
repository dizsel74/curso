<?php
    require_once("Modelo/modelo_usuarios.php");
    
    $usuarios = new Usuarios_modelo();
    $filas = $usuarios->get_usuarios();

    require_once("Vista/vista_usuarios.php");

?>
