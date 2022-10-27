<?php
$edad1 = $_GET['Edad1'];
$edad2 = $_GET['Edad2'];


if($edad1 > $edad2){
    $diferencia = $edad1 - $edad2;
    echo "El mayor de los hermanos es el que tiene " .$edad1." años, y se diferencia por ".$diferencia ." años";
}else{
    $diferencia = $edad2 - $edad1;
    echo "El mayor de los hermanos es el que tiene " .$edad2." años, y se diferencia por ".$diferencia ." años";
}
?>