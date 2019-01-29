<?php


class A{
	private const B = 8+7;

	public function getB(){
		return self::B;
	}
}

$a = new A;

print_r($a->getB());

?>