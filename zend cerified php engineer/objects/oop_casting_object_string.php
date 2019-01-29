<?php

class MyClass{

	public $x;

	public $y;

	function __toString(){
		return '$x: ' . $this->x . "\n" . '$y: ' . $this->y . "\n";
	}

	function __invoke(){
		return "invoke\n";
	}


}


$theClass = new MyClass;
$theClass->x = 1;
$theClass->y = "a";

echo $theClass();
echo $theClass;

?>