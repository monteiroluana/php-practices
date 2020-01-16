<?php 
/*
    gettype — Obtém o tipo da variável

    settype — Atribui um tipo para a variável 

    boolean — Quando o valor é falso ele retorna um valor vazio
*/

$var = "hello";
echo gettype($var) . PHP_EOL;

$var = 2;
echo gettype($var) . PHP_EOL;

$var = 7.8;
echo gettype($var) . PHP_EOL;

$var = false;
echo gettype($var) . " > " . $var . " <" .  PHP_EOL;

$var[0] = 'b';
echo gettype($var) . PHP_EOL;

// >>>>
$var = "0";
echo ">" . $var . PHP_EOL;
settype($var, 'boolean');
var_dump($var);
echo "> " . $var . " <" . PHP_EOL;


// Convertendo tipos
$var = "123";
$inteiro = (int) $var;
$text = (string) $inteiro;
echo gettype($var) . " <-> " . gettype($inteiro) . " <-> " . gettype($text). PHP_EOL;


// Array
$arr=[];
if(is_null($arr)) echo "vazio";
else echo $arr[0];


?>
