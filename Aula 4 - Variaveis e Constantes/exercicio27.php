<?php


$texto = "O PHP (um acrônimo recursivo para PHP: Hypertext Preprocessor) é uma linguagem de script open source de uso geral, muito utilizada, e especialmenteadequada para o desenvolvimento web e que pode ser embutida dentro do HTML.";
echo $maiuscula = strtoupper($texto);
echo("<br>");
echo $primeiraLetraMaiuscula = ucwords($texto, " ");
echo("<br>");
echo $minusculo = strtolower($texto);


?>