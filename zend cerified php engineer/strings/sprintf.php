<?php
$num = 5;
$location = 'tree';
$action = 'are eating';

$format = 'There are %d monkeys in the %s';
echo sprintf($format, $num, $location);
echo PHP_EOL;

$format = 'The %s contains %d monkeys';
echo sprintf($format, $num, $location);
echo PHP_EOL;

$format = 'The %2$s contains %1$d monkeys. They %3$s';
echo sprintf($format, $num, $location, $action);
echo PHP_EOL;

$format = 'The %2$s contains %1$d monkeys.
           That\'s a nice %2$s full of %1$d monkeys.';
echo sprintf($format, $num, $location);
echo PHP_EOL;

echo sprintf("%'.9d\n", 123);
echo sprintf("%'.09d\n", 123);
echo PHP_EOL;
?>