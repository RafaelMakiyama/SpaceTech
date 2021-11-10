<?php


function somar ($var1 , $var2){
    $total = $var1 + $var2;
    echo $total;
}

function imparOuPar($var){
    if($var / 2 == 0){
        echo ("número par". $var);
    } else {
        echo ("número impar ". $var);
    }
}