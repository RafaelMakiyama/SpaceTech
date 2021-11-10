<?php
 
$variavel1;
$variavel2 = 'Nao é NUlo';
$variavel3 = [ 'array1', 'array2'];
$variavel4 = 10;
$variavel5 = NULL;

function isNUll($var){
    if(is_null($var)){
        echo "NUlo";
    }elseif(is_array(($var))){
        echo "é um array<br>";
        var_export($var);
    }
}

isNUll($variavel3);

?>