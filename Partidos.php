<?php
$p_g = $_POST['p_g'];
$p_p = $_POST['p_p'];
$p_e = $_POST['p_e'];
$total_puntos = ($p_g *3) + ($p_p*0) + ($p_e*1);


echo "El total de puntos de los partidos es " .$total_puntos;
?>