<?php

class Test {
	public function __call($name, $args){
		call_user_func_array(array('self', "test$name"), $args); 
	}

	public function testS($l){
		echo "Test".$l;
	}
}

class Test2 extends Test {
	public function testS($l) {
		echo "Test2".$l.","."Test2".$l;
	}
}

$test = new Test2();
$test->S('A');






/*
class MethodenTest {
    public function __call($name, $arguments) 
    {
        // Achtung: Der Wert von $name beachtet die Groß-/Kleinschreibung
        echo "Rufe die Objektmethode '$name' "
             . implode(', ', $arguments). "\n";
    }

    //  Seit PHP 5.3.0 
    public static function __callStatic($name, $arguments) 
    {
        // Achtung: Der Wert von $name beachtet die Groß-/Kleinschreibung
        echo "Rufe die statische Methode '$name' "
             . implode(', ', $arguments). "\n";
    }
}

$obj = new MethodenTest;
$obj->runTest('eines Objektes auf');

MethodenTest::runTest('aus statischem Kontext auf');  // Seit PHP 5.3.0
*/

?>