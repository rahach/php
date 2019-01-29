<?php


class Bar{
	private $a = 'b';
	public $c = 'd';
}



$x = (array) new Bar();

var_dump($x);

if(isset($x['a'])){
	echo array_key_exists($a, $x)? "true" : "false";
} else {
	echo '$x["a"] not set';
}

echo PHP_EOL;

echo $x['c'];

echo PHP_EOL;

$v = array();

$v[0] = 1;

$y = array_merge($x, $v);

var_dump($y);

echo PHP_EOL;



?>