<?php 


    function divisao($numero1 , $numero2){

        try{
            
            if($numero2 == 0 ){
                throw new Exception('Divisão por zero.');
            } 
             $resultado = $numero1 / $numero2;
             echo $resultado;
        }catch(Exception $ex){
            echo $ex->getMessage();
        }
    }

    divisao(1,4);