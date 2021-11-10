<?php

$json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes/1602/distritos");
$json = json_decode($json);

var_export($json);

?>
