<?php

/*
    A chave é opcional. Se não for especificada, o PHP utilizará o incremento da chave do tipo inteiro com maior valor utilizado.

    var_dump — Mostra informações sobre a variável

    list — Cria variáveis como se fossem arrays
*/


// >>>>
$my_array = array("Dog","Cat","Horse");


//Esse exemplo cria um array com o índices a partir do 1.
$firstquarter = array(1 => 'Janeiro', 'Fevereiro', 'Março');
print_r($firstquarter);


// Listando algumas variáveis
list($a, $b) = $my_array;
echo "> $a, $b" . PHP_EOL;


//Listando todas as variáveis
list($a, $b, $c) = $my_array;
echo "> $a, $b, $c" . PHP_EOL;
echo PHP_EOL;


//Pegando valor pelo índice do array
echo PHP_EOL . "> " . $array[0] . PHP_EOL;


//Percorrendo array usando o foreach
echo "> ";
foreach($array as $a){ 
    echo $a . " - ";
}
echo PHP_EOL . PHP_EOL;


//Elementos do array podem ser acessados utilizando a sintaxe array[chave].
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);


// >>>>
var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);


//Vendo o valor da chave 'foo'
echo PHP_EOL . "> " . $array["foo"] . PHP_EOL;
