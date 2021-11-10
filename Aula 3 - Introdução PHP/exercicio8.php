<?php

    $valor1 = 1;
    $valor2 = -2;


    function isPositive($valor){
        if($valor > 0){
            echo "valor positivo {$valor}";
        }else {
            echo "valor negativo {$valor}";
        }
    }

    isPositive($valor2);
?>