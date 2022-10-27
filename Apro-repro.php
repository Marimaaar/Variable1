<?php
$aprendiz = $_GET['Aprendiz'];
$asignatura = $_GET['Asig'];
$nota_final = $_GET['nota_final'];

echo $aprendiz;
echo "<br>";

if($nota_final >=7){
    {
        echo " Aprobaste " .$asignatura;

    }
}if($nota_final <7){
    {
        echo "Reprobaste " .$asignatura;
    }
}
?>