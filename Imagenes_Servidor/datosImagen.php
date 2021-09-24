<?php
if(isset($_POST["cargar"])){
    /*---------------- RECIDIR DATOS IMAGEN -------------*/
    $nom_img=$_FILES["img"]["name"];
    
    if ($nom_img !="" ){ // VERIFICA SI NO ESTA VACIO

        $tipo_img=$_FILES["img"]["type"];
       
        if(strpos($tipo_img,"gif")||strpos($tipo_img,"jpg") || strpos($tipo_img,"png")||strpos($tipo_img,"jpeg")){ //VERIFICA SI ES IMAGEN
           
            $tamano_img=$_FILES["img"]["size"];

            if($tamano_img < 200000){ //VERIFICA SI ES EL TAMAÑO
                require_once("conectar.php");
                
                $temporal=$_FILES["img"]["tmp_name"]; //RUTA DE TEMPORAL EN PC
                $carpeta_destino=$_SERVER["DOCUMENT_ROOT"]."/images/"; //RUTA CARPETA DESTINO EN SERVIDOR www o httpdocs
                move_uploaded_file($temporal,$carpeta_destino.$nom_img);// MOVER DE TEMPORAL EN PC A CARPETA DEL SERVIDOR

                $conexion_BD_insert = Conectar::conexion();

               // $nombre_insertar = $_POST["Nom"];
                //$apellido_insertar = $_POST["Ape"];
                //$direccion_insertar = $_POST["Dir"];
               
                //$foto_insertar = $carpeta_destino.$nom_img; toda la ruta desde c:
                $foto_insertar = "/images/".$nom_img; // solo la ruta para cargar la imagen  despues en una web

                $id_insertar=2;
                
                //$query = "INSERT INTO datos_usuarios (nom, ape, direccion) VALUES (:NOM, :APE, :DIR)"; //CONSULTAS PREPARADAS
                $query = "UPDATE  datos_usuarios  SET foto=:FOTO WHERE id=:ID"; //CONSULTAS PREPARADAS
    
                $resultado = $conexion_BD_insert->prepare($query);
    
                $resultado->execute(array(":FOTO" => $foto_insertar,":ID" => $id_insertar));// $resultado->execute(array(":FOTO" => $foto_insertar));
    
                $resultado->closeCursor();
     
                header("Location:index.php"); // REGRESA AL TERMINAR
            }else{
                //echo "El archivo ".$nom_img." es muy grande<br />";
                header("Location:index.php"); // REGRESA SI EL ARCHIVO ES MUY GRANDE
            }
        } else{
            //echo "El archivo :".$tipo_img." no es una imagen<br />";
            header("Location:index.php"); // REGRESA SI NO ES UNA IMAGEN
        }
    }else{
echo "Debes elijir un archivo para cargar";
       header("Location:index.php"); // REGRESA SI ESTA VACIO EN ENVIO
    }
}else{
    
header("Location:index.php"); // REGRESA A INDEX SI GARGAN DIRECTO LA PAGINA
}
?>