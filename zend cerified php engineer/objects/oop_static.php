<?php

class MyClass1{

	private static $message = "Hello Attribute 1" . PHP_EOL;

	public function __construct(){
		echo self::$message;
	}
}



$theClass = new MyClass1;
//echo MyClass1::$message; error


class MyClass2{


	private static $hello = "Hello Attribute 2";

	public static function getHello(){
		echo self::$hello;
	}

	public static function sayHello(){
		echo "Hello Function 2" . PHP_EOL;
	}

	public static function someFunction(){
		self::sayHello();
	}

}

//MyClass2::sayHello();
MyClass2::someFunction();

MyClass2::getHello();

echo PHP_EOL;
?>