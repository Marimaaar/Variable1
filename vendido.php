<?php
$Costo = $_POST ['Costo'];
$p_ganado = $Costo + ($Costo * 0.15);


echo "El producto se debe vender en " .$p_ganado;


?>