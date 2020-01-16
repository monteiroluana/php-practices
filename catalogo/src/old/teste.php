<?php
require_once 'src/Disco.php';

$dados = [
    new Disco('Diary','Alicia Keys', 'img_alicia_google.com'),
    new Disco('Homecomming','Beyonce', 'img_beyonce_google.com'),
];

var_dump($dados);
echo $dados[0]->nome;
?>