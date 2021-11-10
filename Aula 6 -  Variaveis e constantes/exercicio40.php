<?php
$numeros = [ 1 ];

for ($i=0; $i <= 700; $i++) {
    $random_file = fopen("list.txt", "a");
    $str = $i . "\n";
    fwrite($random_file, $str);
    fclose($random_file);
}



?>