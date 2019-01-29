<?php

function printArray(array $arr = []){
	foreach($arr as $key => $value){
		print_r($key);
		print_r("=>");				
		print_r($value);
		print_r("\n");						
	}

	if(empty($arr)){
		print_r('empty array');		
		print_r("\n");					
	}	
}



$newArr = array('obst'=>'banane', 3=>555, "array"=>array('a','b','c'));

printArray($newArr);

printArray();



class A{
	public function __construct(){

	}

	function className(){
		return __CLASS__;		
	}		
}

class B extends A{
	public function __construct(){
		parent::__construct();		
	}	

	function className(){
		return __CLASS__;		
	}
}

class C extends B{ 
	public function __construct(){
		parent::__construct();
	}

	function className(){
		return __CLASS__;		
	}
}

function printObjectName(A $obj){
	print_r($obj->className());
	print_r("\n");							
}

$a = new A;
$b = new B;
$c = new C;

printObjectName($c);
printObjectName($b);
printObjectName($a);

?>