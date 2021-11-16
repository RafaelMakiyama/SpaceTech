<?php

$array =[
    12,13,11,10,9,4,1,20,32,35,40,39,48,99,95,90,2002, 20,23,26,25,24,10
];

foreach($array as $a => $key){




try{
    if ($key / 2 == 0){
        echo "oi";
       }
}catch(Exception $e){
    echo json_encode(array(
        "mensagem_de_erro" => $e->getMessage(),
        "linha_do_erro" => $e->getLine(),
        "arquivo" => $e->getFile(),
        "code" => $e->getCode()
    ));
}
}


?>
