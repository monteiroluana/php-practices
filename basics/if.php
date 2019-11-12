<?php
$idade = readline("Idade: ");

echo gettype($idade) . PHP_EOL;

$age=15;
echo gettype($age) . PHP_EOL;

if($idade>=18 && $idade<65){
    echo "Voto obrigatório!" .PHP_EOL;
}else if($idade>=16 && $idade<18){
    echo "Você já pode começar a votar!" .PHP_EOL;
}
else{
    echo "Não obrigatório!" .PHP_EOL;
}

?>