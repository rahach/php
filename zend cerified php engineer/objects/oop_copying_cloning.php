<?php

class MyClass{
	public $x = 1;

	function __clone(){
		$this->x = 1;
	}

}

$theClass = new MyClass;
var_dump($theClass);

$classCopy = $theClass;
$classCopy->x = 3;
var_dump($classCopy);
var_dump($theClass);

$classClone = clone $theClass;
var_dump($classClone);
var_dump($theClass);


$classClone->x = 5;
var_dump($classClone);

?>