{<?php
$var1 = 98;
$var2= 72;
$var3= 38;


function verifica($var){
    $i= 1;
    while($i <= $var){
        if($i % 2 == 0){
            echo $i;
            echo "<br>";
        }
        $i++;
    }
}

verifica($var1);

?>