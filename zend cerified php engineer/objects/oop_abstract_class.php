<?php

abstract class Paintings{
	abstract protected function girlDescendingStairs();
	protected function persistenceOfMemory() { 		echo "Memory: 5 GB"; }
	public function __construct(){
		echo "Im being constructed...";
	}
}

class Foo extends Paintings{
	public function girlDescendingStairs(){
		echo "Whee";
	}

	public function persistenceOfMemory(){
		parent::persistenceOfMemory();
	}

}

//$paint = new Paintings; not working

$foo = new Foo;
//$foo->girlDescendingStairs();
//$foo->persistenceOfMemory();


?>