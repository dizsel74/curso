<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>vista</title>
<style>
    table{
        background-color: #909000;
        align-self: center;
        border: #022547;

    }
    
</style>
</head>

<body>
    <table>
        <tr>
            <td bold >Nombre</td>
        </tr>
    <?php 
        foreach($matriz_Calificaciones as $registros){
            echo"<tr><td>".$registros["Nombre"]."</td></tr>";
        }
    ?>
    </table>

</body>
</html>