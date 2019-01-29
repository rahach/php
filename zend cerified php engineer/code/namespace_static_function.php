<?php
namespace MyFramework\DB;

class MyClass{
	static function myName(){
		return __METHOD__;
	}
}


echo MyClass::myName();



?>