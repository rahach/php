<?php
namespace Foo\Bar;

require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/Bar/Baz/file3.php');
require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/file1.php');

const FOO2 = 'const Foo\Bar\FOO2';

function foo2() { return __METHOD__; }

class foo2
{
    static function staticmethod() { return __METHOD__; }
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

echo \Foo\Bar\Baz\foo3(); 
echo PHP_EOL;

echo \Foo\Bar\Baz\foo3::staticmethod(); 
echo PHP_EOL;

echo \Foo\Bar\Baz\FOO3; 
echo PHP_EOL;

echo PHP_EOL;
*/
?>