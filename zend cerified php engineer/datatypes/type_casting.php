<?php

$a = "2N";
echo '$a = "2N";' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
$a = (int)$a;
echo '$a = "2N";$a = (int)$a;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
$a = (float)$a;
echo '$a = "2N";$a = (float)$a;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
$a = (boolean)$a;
echo '$a = "2N";$a = (boolean)$a;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
$a = (object)$a;
echo '$a = "2N";$a = (object)$a;' . PHP_EOL;
var_dump($a);
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
$a = (array)$a;
echo '$a = "2N";$a = (array)$a;' . PHP_EOL;
var_dump($a);
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "2N";
settype($a, "NULL");
echo '$a = "2N";$a = settype($a, "NULL");' . PHP_EOL;
var_dump($a);
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = "$a";
echo '$a = "$a";' . PHP_EOL;
var_dump($a);
echo "Type: " . gettype($a) . PHP_EOL;
?>