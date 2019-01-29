<?php

class ParentClass{
	public function sayHello(){
		echo __CLASS__ . "\n";
		echo __METHOD__ . "\n";		
		echo self::class . "\n";		
	}
}

class ChildClass extends ParentClass{
/*
	public function __construct(){
		echo __CLASS__ . "\n";
		echo __METHOD__ . "\n";		
		echo self::class . "\n";
	}
*/
}


$theClass = new ChildClass;
$theClass->sayHello()




?>