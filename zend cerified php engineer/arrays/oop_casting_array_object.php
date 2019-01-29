<?php

$array = [
	'key'=>'value',
	'nested_array' => [
		'another_key' => 'different_value'
	]
];

$newObject = (object)$array;
var_dump($newObject);


$a = array(1,2);
$b = (object)$a;
var_dump($b);

$c = "hallo";
$d = (object)$c;
var_dump($d);

$e = 1.1;
$f = (object)$e;
var_dump($f);


?>