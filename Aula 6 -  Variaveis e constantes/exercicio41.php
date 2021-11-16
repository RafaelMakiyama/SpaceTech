<?php

$dados = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/paises");

$random_file = fopen("lista.txt", "a");
$str = $dados ;
fwrite($random_file, $str);
fclose($random_file);