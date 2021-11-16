<?php

for ($i=0; $i <= 150; $i++) {
    // if(!is_dir($i)){
    //     mkdir("exercicio49/" .$i);
    // }

    if(($i / 2) == 0){
        $date =  date_create();
        $date = date_timestamp_get($date);
        $random_file = fopen('log'. $date, "w");
        $str = "Criado numero {$i} com sucesos";
        fwrite($random_file, $str);
        fclose($random_file);
        echo 
    }
}
