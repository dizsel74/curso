<?php
if(isset($_POST["cargar"])){    //RECIBIR DATOS IMAGEN 
    $nom_archivo=$_FILES["archivo"]["name"]; 

    if ($nom_archivo !="" ){ // VERIFICA SI NO ESTA VACIO

        $tipo_archivo=$_FILES["archivo"]["type"];
        $tamano_archivo=$_FILES["archivo"]["size"];

        if($tamano_archivo < 200000){ //VERIFICA SI ES EL TAMAÑO

            require_once("conectar.php");
            $conexion_BD_insert = Conectar::conexion(); 

           $temporal=$_FILES["archivo"]["tmp_name"]; //RUTA DE TEMPORAL EN PC
           $carpeta_destino=$_SERVER["DOCUMENT_ROOT"]."/archivosBLOB/"; //RUTA CARPETA DESTINO EN SERVIDOR www o httpdocs
            move_uploaded_file($temporal,$carpeta_destino.$nom_archivo);// MOVER DE TEMPORAL EN PC A CARPETA DEL SERVIDOR
           
        $archivo_aInsertar = fopen($carpeta_destino.$nom_archivo, "r");
        $archivo_enBLOB = fread($archivo_aInsertar,$tamano_archivo);
        fclose($archivo_aInsertar);

          
            
            //$archivo_insertar = $carpeta_destino.$nom_archivo; toda la ruta desde c:
            //$archivo_insertar = "/archivosBLOB/".$nom_archivo; // solo la ruta para cargar la imagen  despues en una web

            $query = "INSERT INTO archivosblob ( nombre, tipo, contenido ) VALUES (:NOM, :TIPO, :CONT)"; //CONSULTAS PREPARADAS
            
                $resultado = $conexion_BD_insert->prepare($query);
    
                $resultado->execute(array(":NOM" => $nom_archivo, ":TIPO"=> $tipo_archivo, ":CONT"=>$archivo_enBLOB));// $resultado->execute(array(":FOTO" => $archivo_insertar));
    
                $resultado->closeCursor();

                header("Location:index.php"); // REGRESA AL TERMINAR CARGA
        }else{
            header("Location:index.php"); // REGRESA SI EL ARCHIVO ES MUY GRANDE
        }       
    }else{
        header("Location:index.php"); // REGRESA SI ESTA VACIO EN ENVIO
    }
}else{ 
    header("Location:index.php"); // REGRESA A INDEX SI GARGAN DIRECTO LA PAGINA
}
?>