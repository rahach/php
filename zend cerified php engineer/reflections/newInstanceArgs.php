<?php

interface Foo { }

interface Bar { }

class A implements Foo, Bar{
	public $x = 42;

	public function newFunc(){

	}
}

function dynamicNew($name) {
	return new $name;
}

function reflectionNewWithArgs($name) {
	$r = new ReflectionClass($name);
	return $r->newInstanceArgs();
}

function reflectionNew($name) {
	$r = new ReflectionClass($name);
	return $r->newInstance();
}


var_dump(dynamicNew('A'));
var_dump(reflectionNewWithArgs('A'));
var_dump(reflectionNew('A'));

echo "-------------------------------\n";

$dynNew = function ($name) {
	return new $name;
};

$dynNew2 = $dynNew('A');

echo $dynNew2->x;
echo "\n";

var_dump($dynNew2);

echo "-------------------------------\n";

$newRefl = function ($name) {
	$r = new ReflectionClass($name);
	return $r->newInstance();
};



echo $newRefl('A')->x;

echo "\n";
echo "-------------------------------\n";

$class = new ReflectionClass('A');
$methods = $class->getMethods();
$ifaces = $class->getInterfaces();
var_dump($methods);
var_dump($ifaces);

echo "-------------------------------\n";


