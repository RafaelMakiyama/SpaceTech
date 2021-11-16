<?php 



$link = "https://viacep.com.br/ws/01001000/json/";

$ch = curl_init($link);
//setei as opções da requisição
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//tratando resposta
$resposta = curl_exec($ch);
//fecha conexão
curl_close($ch);

$data = json_decode($resposta, true);

var_dump($data);