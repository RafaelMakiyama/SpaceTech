<?php

$array1 = [ 
    'java',
    'php',
    'phynton'
];
 
$array2 = [
    'pessoa' => 'joao',
    'pessoa' => 'Pedro',
    'pessoa' => 'Clara',
];

$array3 = [
    'Loja' => 'Centro',
    'Loja' => 'Zona SUl',
    'Loja'=> 'Zona Oeste',
];


function exibeArray($array){

    foreach($array as $key => $value){
        echo $key;
        echo " - ";
        echo $value . " <br>";
    }
}
exibeArray($array3);


?>