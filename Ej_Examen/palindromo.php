<?php
// print_r($_GET);
    if(isset($_GET['valorEvaluar'])){
        $valorEvaluar = str_replace(" ","",$_GET['valorEvaluar']);
        $valorEvaluar =strtolower($valorEvaluar);
        $valorInverso = strrev($valorEvaluar);

        if($valorEvaluar == $valorInverso){
   
            echo "si es palidromo ". $valorInverso. " = " . $valorEvaluar;
        }else{
            echo "NO es palindromo " . $valorInverso. " != " . $valorEvaluar;;
        }

    }else{
        echo "Error de envio";
    }
?>