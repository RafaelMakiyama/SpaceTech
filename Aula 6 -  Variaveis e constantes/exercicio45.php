<?php
$nomes = [
    'Rafael', 'GUilherme', 'Pipoca', 'Felipe','Alexsander', 'Francisco', 'Bruno','Bethoven','Ana','Fernando','Joao','Maria','Jose','Henrique','Sueli'
];


foreach ($nomes as $nome => $value){
    if(!is_dir($value."txt")){
       // mkdir($value);
      
        $file = "/var/www/html/SpaceTech/Aula 6 -  Variaveis e constantes/" .$value ."/". $value;
        $random_file = fopen($file .".txt", "w");

        $str = $value . "\n";
        fwrite($random_file, $str);
        fclose($random_file);

    }

   
}