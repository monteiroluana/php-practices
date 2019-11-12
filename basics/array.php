<?php

// >>>>
$my_array = array("Dog","Cat","Horse");

list($a, $b) = $my_array;
echo "1> $a, $b" . PHP_EOL;

list($a, $b, $c) = $my_array;
echo "2> $a, $b, $c" . PHP_EOL;
echo PHP_EOL;

// >>>>
$info = array('café', 'marrom', 'cafeína');
list($a[0], $a[1], $a[2]) = $info;
var_dump($a);
echo PHP_EOL;

// >>>>
$array = array("foo", "bar", "hello", "world");
// var_dump($array);

echo "3> " . $array[0] . PHP_EOL . PHP_EOL;
echo "4> ";
foreach($array as $a){ 
    echo $a . " - ";
}
echo PHP_EOL . PHP_EOL;

// >>>>
$array = array(
    "foo" => "bar",
    42    => 24,
    "multi" => array(
         "dimensional" => array(
             "array" => "foo"
         )
    )
);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

echo PHP_EOL . PHP_EOL;
echo "5> " . $array["foo"] . PHP_EOL;

// >>>>
