<?php

$link = file_get_contents("https://random-data-api.com/api/business_credit_card/random_card");

$link = json_encode($link);
$random_file = fopen("exercicio47.txt", "w");

$str = $link ;
fwrite($random_file, $str);
fclose($random_file);
