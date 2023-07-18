<?php

$numero = 0;


$numero = htmlspecialchars($_POST["numero"]);

if($numero != 0 && ($numero % 2) == 0){
        echo $numero . ' es par';
    }
else{
     echo $numero . 'el numero tiene que ser diferente de 0';
}

?>