<?php
if(isset($_POST["cargar"])){    //RECIBIR DATOS IMAGEN 
    $nom_archivo=$_FILES["archivo"]["name"]; 

    if ($nom_archivo !="" ){ // VERIFICA SI NO ESTA VACIO

        $tipo_archivo=$_FILES["archivo"]["type"];
        $tamano_archivo=$_FILES["archivo"]["size"];

        if($tamano_archivo < 500000){ //VERIFICA SI ES EL TAMAÑO  5kb

            require("conectar.php");
            $conexion_BD_insert = Conectar::conexion(); 

            $temporal=$_FILES["archivo"]["tmp_name"]; //RUTA DE TEMPORAL EN PC
            $carpeta_destino=$_SERVER["DOCUMENT_ROOT"]."/archivosBLOB/"; //RUTA CARPETA DESTINO EN SERVIDOR www o httpdocs
            
            $carpeta_destino=addslashes($carpeta_destino);

            $archivo_aInsertar = fopen($carpeta_destino.$nom_archivo, "r"); //CREA LA RUTA DEL ARCHIVO A INSERTA

            if($archivo_aInsertar != NULL){//VERIFICA QUE SE HALLA CREADO LA RUTA

                $archivo_enBLOB = fread($archivo_aInsertar,$tamano_archivo);
                
                $query = "INSERT INTO archivosblob ( nombre, tipo, contenido ) VALUES (:NOM, :TIPO, :CONT)"; //CONSULTAS PREPARADAS
                $resultado = $conexion_BD_insert->prepare($query);
                $resultado->execute(array(":NOM" => $nom_archivo, ":TIPO"=> $tipo_archivo, ":CONT"=>$archivo_enBLOB));// $resultado->execute(array(":FOTO" => $archivo_insertar));
               

                if($resultado->rowCount()> 0){ //VERIFICA SI SE INSERTO A LA BBDD
                    $resultado->closeCursor();
                    move_uploaded_file($temporal,$carpeta_destino.$nom_archivo);// MOVER DE TEMPORAL EN PC A CARPETA DEL SERVIDOR
                    echo '<script type="text/javascript">alert("Archivo Incuido");</script>';

                }else{
                    echo "ERROR". $e->getLine();
                }
                fclose($archivo_aInsertar);
                //header("Location:index.php"); // REGRESA AL TERMINAR CARGA
                           
            }else{
                echo '<script type="text/javascript">alert("No Se pudo abrir fopen -> Archivo NO Incuido");</script>';
            }
        }else{
           // header("Location:index.php"); // REGRESA SI EL ARCHIVO ES MUY GRANDE
           echo '<script type="text/javascript">alert("Archivo Muy Grande");</script>';
        }       
    }else{
        header("Location:index.php"); // REGRESA SI ESTA VACIO EN ENVIO
    }
}else{ 
    header("Location:index.php"); // REGRESA A INDEX SI GARGAN DIRECTO LA PAGINA
}
?>