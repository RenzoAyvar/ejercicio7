<?php
numero = 8;


$numero = htmlspecialchars($_POST["numero"]);

if($numero == 0){
            echo $numero . ' el numero tiene que ser diferente de 0';
    }
else{
     if(($numero % 2) == 0){
        echo $numero . ' es par';
    
    }else{
        echo $numero . ' es impar';
    }
}
?>