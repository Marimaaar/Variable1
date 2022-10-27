<?php
$volantes = $_POST['volantes'];
$poster = $_POST['poster'];
$tarjeta = $_POST['tarjetas'];

$total_volantes= $volantes*2000;
$total_poster= $poster*5000;
$total_tarjeta= $tarjeta*500;


$total_a_pagar= $total_volantes + $total_poster + $total_tarjeta;

echo "El total a pagar de los volantes es " .$total_volantes;
echo "<br>";
echo "El total a pagar de los pósters es " .$total_poster;
echo "<br>";
echo "El total a pagar de las tarjetas de presentación es " .$total_tarjeta;
echo "<br>";
echo "El total a pagar " .$total_a_pagar;



?>