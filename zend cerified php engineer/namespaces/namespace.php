<?php
namespace test;

define('FOO', 111);
const FOO = 222;
define(__NAMESPACE__.'\FOO',333);



echo \FOO;
echo PHP_EOL;

echo FOO;
echo PHP_EOL;

echo __NAMESPACE__;
echo PHP_EOL;

echo constant(__NAMESPACE__.'\FOO');
echo PHP_EOL;
?>