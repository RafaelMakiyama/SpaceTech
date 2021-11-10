<?php

$salario1 = 2900.00;
$salario2 = 6900.00;
$salario3 = 13900.00;

 function calcularImposto($valor){
    $salarioMinimo = 1100.00;
   
    if($valor <= $salarioMinimo * 2 ){
        echo "Salário isento a desconto. Valor do salário: ". $valor ;
    }elseif($valor >= $salarioMinimo * 2 || $valor >= $salarioMinimo * 3){
       $desconto = $valor - ($valor * 0.5);
       echo "O valor do salário é de " .$desconto ;
    }
        $desconto = $valor - ($valor * 0.10);
       echo "O valor do salário é de " .$desconto ;

    
    
}
calcularImposto($salario3);
?>