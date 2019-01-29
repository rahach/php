<?php

trait A{
	public function helloA(){
		echo "helloA";
	}

	public function world(){
		echo "worldA";
	}
}

trait B{

	use A;

	public function hello(){
		echo "helloB";
	}

	public function world(){
		echo "worldB";
	}
}


class traitExample{

	use B;

}


traitExample::hello();
traitExample::helloA();



?>