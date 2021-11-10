<?php

$arrayNumeros =[
    1, 3,20,21, 20,10, 30, 23, 09, 11, 100, 11, 92, 34, 10, 1, 2
];

foreach($arrayNumeros as $key => $values){
    $valortotal = $valortotal + $values;

}

$media = $valortotal / 16;

var_export($media);