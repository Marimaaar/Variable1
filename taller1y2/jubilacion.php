<?php
$Sexo = $_POST ['sexo'];
$Edad = $_POST ['Edad'];
if ($Sexo == "Masculino"){
    if($Edad >= 63){
        echo "Usted se puede jubilar";
    }else{
        echo "Usted no se puede jubilar";
    }
}elseif ($Sexo == "Femenino"){
    if($Edad >54){
        echo "Usted se puede jubilar";
    }else {
        echo "Usted no se puede jubilar";
    }
}

?>