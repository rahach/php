<?php


class MyClass1{

	public $x;

	public $y;

	public function __wakeup(){
		echo "Done" . PHP_EOL;
	}

	public function __sleep(){
		return array('x');
	}
}


$theClass1 = new MyClass1;

$theClass1->x = 1;
$theClass1->y = "a";

var_dump($theClass1);

$theString1 = serialize($theClass1);

var_dump($theString1);

$newObject1 = unserialize($theString1);
var_dump($newObject1);

$newObject1 = unserialize($theString1, ['allowed_classes' => [MyClass1::class]]);
var_dump($newObject1);

$newObject1 = unserialize($theString1, ['allowed_classes' => [A::class]]);
var_dump($newObject1);

$newObject1 = unserialize($theString1, ['allowed_classes' => false]);
var_dump($newObject1);

$newObject1 = unserialize($theString1, ['allowed_classes' => true]);
var_dump($newObject1);

$newObject1 = unserialize($theString1, "jkl");
var_dump($newObject1);

class MyClass2{

	public $x;

	public $y;
}


$theClass2 = new MyClass2;

$theClass2->x = 1;
$theClass2->y = "a";

var_dump($theClass2);

$theString2 = serialize($theClass2);

var_dump($theString2);

$newObject2 = unserialize($theString2);

var_dump($newObject2);


?>