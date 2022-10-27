<?php
$Total = $_GET ['Total'];
$T_p = $Total-
($Total * 0.2);

if ($T_p > 20.000){
    {
        echo "Su total a pagar es " .$T_p;
    }
}if($T_p <20.000){
    {
        echo "Su total a pagar es " .$Total;
    }
}

?>