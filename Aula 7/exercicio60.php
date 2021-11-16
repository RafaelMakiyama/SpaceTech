<?php

$arquivos = [
    "arquivo1.txt",
    "arquivo2.txt",
    "arquivo3.txt"
];

$url = "https://jsonplaceholder.typicode.com/photos";

foreach($arquivos as $arq => $key){
    if ($key == "arquivo2.text"){
        echo "oi";
    }
}