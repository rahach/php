<?php

$a = "2N";
echo '$a = "2N";' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

@$a += $a;
echo '@$a += $a;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a *= $a;
echo '$a *= $a;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

$a = $a * 3.3;
echo '$a = $a * 3.3;' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

echo PHP_EOL;

@$a = $a * "10 Little Piggies";
echo '@$a = $a * "10 Little Piggies";' . PHP_EOL;
echo $a . PHP_EOL;
echo "Type: " . gettype($a) . PHP_EOL;

?>