<?php
/* operadores de comporación
== igualdad
< menor qué
> mayor qué
<= menor o igual qué
>= mayor o igual qué


Operadores de anidamiento
&& operador &
or operador o

*/
$n1 = 5;
$n2 = 7;
$n3 = 10;

if ($n1>$n2){
    if ($n1>$n3){
        echo $n1." es mayor que ".$n2." y ".$n3;
    }else{
        echo $n3." es mayor que ".$n1." y ".$n2
    }
}

/*
if ($n1<$n2){
    echo $n1." es menor que ".$n2;
}else {
    echo $n2." es menor' que ".$n1;
}*/
?>