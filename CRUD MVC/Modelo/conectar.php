<?php
    class Conectar{

        public static function conexion(){
            try{

                require("Modelo/config.php");
                $conexion_BD=new PDO($dominio, $usuario, $clave);
                $conexion_BD->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //gestion de error para poder verlos
                $conexion_BD->exec($caracteres);

            }catch(Exception $e){

                echo "ERROR EN LINEA-> ". $e->getLine();
                die ("Oop!". $e->getMessage());
            }
            
            return $conexion_BD; //regresa la coneccion como resultado de la funcion
         }

    }

?>