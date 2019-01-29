<?php
namespace Foobar;

class Foo{
	static public function test($name){
		print "Hello {$name}!\n";
	}
}

call_user_func_array(__NAMESPACE__.'\Foo::test', array('Hannes'));

call_user_func_array(array(__NAMESPACE__.'\Foo', 'test'), array('Philip'));

?>