<?php
class A{

	public $name;

	public function __construct(){
		$this->name = "B";
	}


	public function A(){
		$this->name = "A";
	}
}

$a = new A();

echo $a->name;

echo "\n";

$a->A();

echo $a->name;

echo "\n";
