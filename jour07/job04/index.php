<?php

function calcul(){
    $a = 5;
    $operation = "+";
    $b = 10;
    $c=$a.$operation.$b." = ".($a+$b);
    return $c;
}
echo calcul();