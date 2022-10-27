<?php
$Nombre = $_POST ['Nombre'];
$Asignatura = $_POST ['Asignatura'];
$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];
$fn1 = $nota1 * 0.3;
$fn2 = $nota2 * 0.3;
$fn3 = $nota3 * 0.4;
$final = $fn1 + $fn2 + $fn3;

if($final >= 4){
    {
    echo $Nombre ." aprobaste " .$Asignatura;
}
}if($final < 4){
    {
        echo $Nombre ." reprobaste " .$Asignatura;
    }
}
?>