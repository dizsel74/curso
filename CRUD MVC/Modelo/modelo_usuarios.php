<?php
class Usuarios_modelo {
    private $db;
    private $usuarios;

    public function __construct(){
        require_once("Modelo/conectar.php");
        $this->db = Conectar::conexion();
        $this->usuarios = array();
        
    }

    public function get_usuarios(){
       
        require("paginacion.php");
        
        $consulta = $this->db->query("SELECT * FROM datos_usuarios LIMIT $inicio_desde, $registros_por_pagina");
        
        while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
            $this->usuarios[] = $fila;
        }
        
        /*-------------INICIO- INSERT ----------*/
        if (isset($_POST["nuevo"])) { // si han pulsado el boton inser
            
            $conexion_BD_insert = Conectar::conexion();

            $nombre_insertar = $_POST["Nom"];
            $apellido_insertar = $_POST["Ape"];
            $direccion_insertar = $_POST["Dir"];

            $query = "INSERT INTO datos_usuarios (nom, ape, direccion) VALUES (:NOM, :APE, :DIR)"; //CONSULTAS PREPARADAS

            $resultado = $conexion_BD_insert->prepare($query);

            $resultado->execute(array(":NOM" => $nombre_insertar, ":APE" => $apellido_insertar, ":DIR" => $direccion_insertar));

            $resultado->closeCursor();

            // header("Location:index.php");
        /*------------------- FIN INSERT ---------*/
        }else if(isset($_GET["Id"])){
        
            $conexion_BD_borrar = Conectar::conexion();

            $id_borrar=$_GET["Id"];

            $conexion_BD_borrar->query("DELETE FROM datos_usuarios WHERE id='$id_borrar'");
        
            //header("Location:index.php");
        }
        
        return $this->usuarios;
    }
   
}
