<?php
namespace Foo;

require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/Bar/Baz/file3.php');
require_once('/var/www/html/m2/kurs/php_zend_zert/uebungen/namespaces/Foo/Bar/file2.php');

const FOO1 = 'const Foo\FOO1';

function foo1() { return __METHOD__; }

class foo1
{
    static function staticmethod() { return __METHOD__; }
}

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

?>