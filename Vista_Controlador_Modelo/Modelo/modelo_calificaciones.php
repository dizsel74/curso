<?php
    class Calificaciones_modelo{
        private $db;
        private $calificaciones;

        public function __construct(){
             require_once("Modelo/conectar.php");
            $this->db=Conectar::conexion();
            $this->calificaciones=array();
        }

        public function get_calificaciones(){
            require("Modelo/querys.php");
            $consulta=$this->db->query($slct_Cal);

            while($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->calificaciones[]=$fila;
            }
            
            return $this->calificaciones;
        }

    }
?>