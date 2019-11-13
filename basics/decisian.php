<?php
/*
readline — Lê uma linha
    Retorna uma simples string

random_int — Retorna um número inteiro aleatório no intervalo de min e max.
    random_int(min, max);

operador ternário
    (expressão) ? valueTrue : valueFalse ;
*/

$idade = readline("Idade: ");

echo gettype($idade) . PHP_EOL;

$age=15;
echo gettype($age) . PHP_EOL;


var_dump(random_int(0, 10));


// >>>> IF <<<<
if($idade>=18 && $idade<65){
    echo "Voto obrigatório!" .PHP_EOL;
}else if($idade>=16 && $idade<18){
    echo "Você já pode começar a votar!" .PHP_EOL;
}
else{
    echo "Não obrigatório!" .PHP_EOL;
}


// >>>> SWITCH <<<<
switch ($idade) {
    case 18:
        echo "não seja chato";
        break;
    case 65:
        echo "parabêns por ter chego até aqui!";
        break;
    case 12:
        echo "tem muita coisa pela frente ainda";
        break;
    default:
        echo "E ai meu irmão!?";
}
echo PHP_EOL;


// >>>> IF TERNÁRIO<<<<
$situacao = ( $idade >=18 )? "você já é maior de idade" : "você precisa de um responsável";
echo $situacao;

echo PHP_EOL;

?>