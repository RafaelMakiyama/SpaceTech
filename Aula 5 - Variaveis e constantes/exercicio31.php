<?php
$json = file_get_contents("https://rickandmortyapi.com/api");

$json = json_decode($json, true);

function verificaVariavel($variavel){
    
    if(is_null($variavel)){
        echo "NUlo";
    }elseif(is_array(($variavel))){
        echo ('é um array');
        var_export($variavel);
    }
}

verificaVariavel($json);

?>
