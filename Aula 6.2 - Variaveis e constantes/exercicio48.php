<?php 

$array = [
"https://random-data-api.com/api/stripe/random_stripe",
"https://random-data-api.com/api/stripe/random_stripe",
"https://random-data-api.com/api/app/random_app",
"https://random-data-api.com/api/beer/random_beer",
"https://random-data-api.com/api/commerce/random_commerce",
"https://random-data-api.com/api/device/random_device",
"https://random-data-api.com/api/subscription/random_subscription"
];

foreach($array as $valor => $key){
    $link = file_get_contents($key);
    foreach($arrayJson as $valor){
        $dados = array();
        foreach($valor as $v){
            array_push($dados, $v);
        }
    }   
    $link = json_encode($link);
    $random_file = fopen("exercicio48.txt", "a");
    $str = $link ."\n" ;
    fwrite($random_file, $str);
    fclose($random_file);
}