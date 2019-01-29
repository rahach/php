<?php


class B{

	function b($var){
		$var = 5;
		return $var;

	}


	public function __construct($var){
		return call_user_func_array(array('static', 'b'), array($var));
	}



}


class A extends B{

	const aaa = 100;

	function a($var){
		$var = 50;
		return $var;
	}


	static function aaaa($var){
		return call_user_func_array(array('static', 'a'), array($var));
	}


	public function __construct($var){
		echo call_user_func(array('parent', '__construct'), $var);		
		echo call_user_func( 'A::a', $var);				
		echo call_user_func( 'self::a', $var);				
		echo call_user_func(array('static', 'a'), $var);		
		echo call_user_func(array('static', 'aaaa'), $var);				
		echo call_user_func(array('self', 'aaaa'), $var);				
		echo call_user_func(array($this, 'aaaa'), $var);						
	}
}

$var = 0;

$aa = new A($var);

echo $aa::aaa;

echo "\n";

echo $aa::aaaa($var);

echo "\n";

echo A::aaa;

echo "\n";

//echo call_user_func(array('A','aaaa'), $var);

//echo "\n";

//call_user_func_array(array('A','aaaa'), array($var));