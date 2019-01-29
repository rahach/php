<?php

trait A{
	public function hello(){
		echo "helloA";
	}

	public function world(){
		echo "worldA";
	}

	private $abc = 1;


	public function increment(){
		$this->abc++;
	}

	public function getValue(){
		return $this->abc;
	}

}

trait B{
	public function hello(){
		echo "helloB";
	}

	public function world(){
		echo "worldB";
	}
}


class traitExample{

	use A, B { 
		B::hello insteadof A;
		A::hello as helloA; 
		B::world insteadof A;
		A::world as worldA; 
	}


	public function incrementBy2(){
		$this->increment();
		$this->abc++;
	}


}


$trait = new traitExample();

$trait->hello();
$trait->world();

$trait->helloA();
$trait->worldA();


$trait->incrementBy2();
var_dump($trait->getValue());

/*

traitExample::hello();
traitExample::world();

traitExample::helloA();
traitExample::worldA();
*/


?>