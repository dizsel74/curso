<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Subir Imagenes Servidor</title>

</head>

<body>
   <?php
   //Si se quiere subir una imagen
   if (isset($_POST['subir'])) {

      $archivo = $_FILES['archivo']['name']; //Recogemos el archivo enviado por el formulario

      if (isset($archivo) && $archivo != "") { //Si el archivo contiene algo y es diferente de vacio

         //Obtenemos algunos datos necesarios sobre el archivo
         $tipo = $_FILES['archivo']['type'];
         $tamano = $_FILES['archivo']['size'];
         $temp = $_FILES['archivo']['tmp_name'];

         $carpeta_destino = $_SERVER["DOCUMENT_ROOT"] . "/images/";


         //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
         if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo '<div>
                  <b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
                     - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b>
                  </div>';
         } else {
            //Si la imagen es correcta en tamaño y tipo. Se intenta subir al servidor

            //if (move_uploaded_file($temp, 'images/'.$archivo)) { //lo mueve a la carpeta en donde esta el index
            if (move_uploaded_file($temp, $carpeta_destino . $archivo)) { //lo mueve a la carpeta en el nivel de httpdos o www
               //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
               chmod($carpeta_destino . $archivo, 0777);
               //Mostramos el mensaje de que se ha subido con éxito
               echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
               //Mostramos la imagen subida
               echo $carpeta_destino . $archivo;
               echo '<p><img src="/images/' . $archivo . '"></p>';
               //echo '<p><img src="images/'.$archivo.'"></p>'; // cuando es en el folder esta al nivel que index
            } else {
               //Si no se ha podido subir la imagen, mostramos un mensaje de error
               echo '<div>
                        <b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b>
                     </div>';
            }
         }
      }
   }
   ?>

   <form action="index.php" method="POST" enctype="multipart/form-data">
      <table>
         <tr>
            <td>
               <label>Añadir imagen</label>
            </td>
            <td>
               <input name="archivo" id="archivo" type="file" />
            </td>
            <td>
               <input type="submit" name="subir" value="Subir imagen" />
            </td>
         </tr>
      </table>
   </form>
   
</body>

</html>