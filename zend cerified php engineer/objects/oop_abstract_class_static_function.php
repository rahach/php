<?php

abstract class Base{

	protected function __construct(){}

	public static function create(){
		return new static();
	}

	abstract function action();

}

class Item extends Base{
	public function action(){
		echo __CLASS__;
	}
}

$item = Item::create();
var_dump($item);
$item->action();




class A {
  public static function who() {
    echo __CLASS__;
  }
  public static function test() {
    static::who();
  }
}

class B extends A {
  public static function who() {
    echo __CLASS__;
  }
}

B::test();

?>