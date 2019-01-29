<?php

echo PHP_EOL, "getdate()", PHP_EOL, PHP_EOL;

$today = getdate();

var_dump($today);

echo PHP_EOL, "date('\D\a\\t\u\m: d.m.Y H:i:s')", PHP_EOL, PHP_EOL;

$today1 = date("\D\a\\t\u\m: d.m.Y H:i:s");

echo $today1;

echo PHP_EOL, "DateTime()", PHP_EOL, PHP_EOL;

$today2 = new DateTime();

echo $today2->format("d.m.Y");

echo PHP_EOL, PHP_EOL;

$today3 = new DateTime('@'.time());

echo $today3->format("d.m.Y");

echo PHP_EOL, PHP_EOL;

setlocale(LC_ALL, 'de_DE');

$today3 = new DateTime("Juli");

echo $today3->format("d.m.Y");

echo PHP_EOL, PHP_EOL;

$today3 = new DateTime('now');

echo $today3->format("d.m.Y");

echo PHP_EOL, PHP_EOL;

echo time();

?>