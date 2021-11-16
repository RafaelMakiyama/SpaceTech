<?php 

if (!is_dir('/var/www/html/SpaceTech/Aula 7/alunos')) {
    mkdir('/var/www/html/SpaceTech/Aula 7/alunos', 0777, true);
}

if (!is_dir('/var/www/html/SpaceTech/Aula 7/professores')) {
    mkdir('/var/www/html/SpaceTech/Aula 7/professores', 0777, true);
}

if (!file_exists('/var/www/html/SpaceTech/Aula 7/alunos')) {
    echo "contem arquivos";
} else {
    echo "oi";
}

?>