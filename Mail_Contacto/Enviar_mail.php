<?php

if($_POST["nombre"] == "" || $_POST[apellido] == "" || $_POST["email"]=="" || $_POST["comentarios"]==""){
    echo "faltan campos obligatorios de llenar";
    die();
}else{
    $nombre = $_POST["nombre"];

    $apellido = $_POST["apellido"];
    
    $textoMail = $_POST["comentarios"];
    
    $to = $_POST["email"];

    $telefono = $_POST["tfno"];

    $asunto = $_POST["asunto"];

    $headers =  "MIME-Version: 1.0\r\n ";

$headers.= "Content-type: text/html; charset=iso-8859-1\r\n"; /* .= sirve para concatenar */
$headers.= "From: Juan <webmaster@ejemplo.com >\r\n";

$exito =mail($to,$asunto,$textoMail,$head);

if ($exito == true){
    echo"enviado";
}else{
    echo"error de envio";
}
}
?>