<?php

$valor = (int) readline("Informe o valor para saque: ");

$nota100 = $nota50 = $nota20 = $nota10 = $nota5 = $nota1 = 0;

if ($valor > 0) {
    /*
        1 - quantas vezes o valor consegue ser dividido pela nota? esse numero tem que ser maior que 0;
        2 - guardar o resto da divisão para a fazer o calculo da próxima nota!
    */

    $nota100 = intval($valor / 100);
    $valor = $valor % 100;
    // echo "100 - " . $nota100 . " - " . $valor . PHP_EOL;

    $nota50 = intval($valor / 50);
    $valor = $valor % 50;
    // echo "50 - " . $nota50 . " - " . $valor . PHP_EOL;

    $nota20 = intval($valor / 20);
    $valor = $valor % 20;
    // echo "20 - " . $nota20 . " - " . $valor . PHP_EOL;

    $nota10 = intval($valor / 10);
    $valor = $valor % 10;
    // echo "10 - " . $nota10 . " - " . $valor . PHP_EOL;

    $nota5 = intval($valor / 5);
    $valor = $valor % 5;
    // echo "5 - " . $nota5 . " - " . $valor . PHP_EOL;

    $nota1 =$valor / 1;
    $valor = $valor % 1;
    // echo "1 - " . $nota1 . " - " . $valor . PHP_EOL;
} else {
    echo "Valor inválido!" . PHP_EOL;
}



if ($nota100 >= 1) {
   echo $nota100 . " nota(s) de R$100: " . PHP_EOL;
}
if ($nota50 >= 1 ) {
    echo $nota50 . " nota(s) de R$50: " . PHP_EOL;
}
if ($nota20 >= 1 ) {
    echo $nota20 . " nota(s) de R$20: " . PHP_EOL;
}
if ($nota10 >= 1) {
    echo $nota10 . " nota(s) de R$10: " . PHP_EOL;
}
if ($nota5 >= 1) {
    echo $nota5 . " nota(s) de R$5: " . PHP_EOL;
}
if ($nota1 >= 1) {
    echo $nota1 . " nota(s) de R$1: " . PHP_EOL;
}
