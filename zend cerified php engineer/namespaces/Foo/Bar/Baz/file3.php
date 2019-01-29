<?php
namespace Foo\Bar\Baz;


require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/Bar/file2.php');
require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/file1.php');

const FOO3 = 'const Foo\Bar\Baz\FOO3';

function foo3() { return __METHOD__; }

class foo3{
	static function staticmethod(){ 
		return __METHOD__;
	}
}
/*
echo PHP_EOL;
echo __FILE__;
echo PHP_EOL;
echo "Namespace: " . __NAMESPACE__;
echo PHP_EOL;

echo PHP_EOL;

echo \Foo\foo1(); 
echo PHP_EOL;

echo \Foo\foo1::staticmethod(); 
echo PHP_EOL;

echo \Foo\FOO1; 
echo PHP_EOL;

echo PHP_EOL;

echo \Foo\Bar\foo2(); 
echo PHP_EOL;

echo \Foo\Bar\foo2::staticmethod(); 
echo PHP_EOL;

echo \Foo\Bar\FOO2; 
echo PHP_EOL;

echo PHP_EOL;

echo foo3(); 
echo PHP_EOL;

echo foo3::staticmethod(); 
echo PHP_EOL;

echo FOO3; 
echo PHP_EOL;

echo PHP_EOL;
*/
?>