<?php

function fahereintParaCelsius($valorFahereint){
    $c = ($valorFahereint - 32) / 1.8;
    echo $c;
}

fahereintParaCelsius(86);