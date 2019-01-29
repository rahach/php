<?php

function increment(&$val){
	++$val;
}

$val = 1;
increment($val);

echo $val . "\n\n";


class A{
	protected $x = array();

	public function &getX(){
		return $this->x;
	}
}

$a = new A();

array_push($a->getX(), "one");
array_push($a->getX(), "two");

var_dump(count($a->getX()));

?>