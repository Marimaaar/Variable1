<?php
$C_D = $_POST ['C_D'];
$tasa1 = $C_D +($C_D * 0.02);
$tasa2 = $C_D +($C_D * 0.045);
$tasa3 = $C_D +($C_D * 0.07);

if ($C_D < 500){    
        echo "Debe 2% de intereses y " .$tasa1 ." de capital";    
}elseif($C_D >= 500 && $C_D < 1500){ 
    echo "Debe 4.5% de intereses y " .$tasa2 ." de capital";
}elseif($C_D >=1500){
    echo "Debe 7% de intereses y " .$tasa3 ." de capital";
}

?>