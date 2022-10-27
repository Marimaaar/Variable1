<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if($num1>$num2){
    if($num1>$num3){
        echo $num1." es mayor que ".$num2." y ".$num3;
    }else{
        echo $num3." es mayor que ".$num1." y ".$num2;
    }   
}elseif($num2>$num3){
    echo $num2." es mayor que ".$num1." y ".$num3;    
    }else{
        echo $num3." es mayor que ".$num2." y ".$num1;
    }


?>