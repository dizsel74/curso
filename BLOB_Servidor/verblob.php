<?php
//phpinfo();
try{
    require("conectar.php");
    $conexion_BD_ver=Conectar::conexion();
/*---------------------VARIABLES PARA PODER MOSTRAR LINEAS DE CONTENIDO-----------------------*/
    $id="";
    $tipo="";
    $nombre="";
    $contenido="";
    $idd=4;

    $query="SELECT * FROM archivosblob WHERE id=:ID";
    $mostrar_dato=$conexion_BD_ver->prepare("$query");
    $mostrar_dato->execute(array(":ID"=>$idd));

    while($fila=$mostrar_dato->fetch(PDO::FETCH_ASSOC)){//ASIGNACION DE VALORES DE LA TBL A LAS VARIABLES 
        $id=$fila["id"];
        $nombre=$fila["nombre"];
        $tipo=$fila["tipo"];
        $contenido=$fila["contenido"];
    }
    echo "id :".$id."<br/>";
    echo "nom:".$nombre."<br/>";
    echo "tipo:".$tipo."<br/>";

     //$imh=imagecreatefromstring($contenido);
     //echo $imh;

    $image= new imagick();
    $image->readImageBlob($contenido);
echo '<img src="data:image/png;base64,' .  base64_decode($image->getimageblob())  . '" />';

/*para mostrar el archivo decodificado tiene que estardentro de un cotenedor adoc a su tipo, ing, iframe, div  -----*/ 
    //echo "<iframe src='data:application/pdf;base64,'. base64_encode($contenido).'></iframe>";
    echo '<img src="data:image/png;base64,'. base64_encode($contenido) .'"/><br/>';
   // file_put_contents("c:/xampp/htdocs/archivosBLOB/".$nombre, base64_encode($contenido));

    $mostrar_dato->closeCursor();

    /* TRAE CADA arreglo con sus propiedades linea de registro de la tabl datos_Usuarios*/
  //  $query=$conexion_BD->query("SELECT * FROM datos_usuarios");
  //$fila=$query->fetchAll(PDO::FETCH_OBJ); 

 //$fila=$conexion_BD_ver->query("SELECT * FROM archivosblob WHERE id=13")->fetchAll(PDO::FETCH_OBJ); //simplificado lo anterior
 //echo $fila->id;

}catch(Exception $e){
    echo "UPS! Un error ocurrion".$e->getMessage();
    die ("Algo no fumciono");
}
