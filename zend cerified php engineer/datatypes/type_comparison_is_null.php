<?php

$x = "";
echo '$x = "";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = null;
echo '$x = null;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

//var $y;
echo 'var $y;' . PHP_EOL;
@var_dump($y);
echo 'is_null($y): ' . (@is_null($y) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

//$z ist undefiniert 	
echo '$z ist undefiniert' . PHP_EOL;
@var_dump($z);
echo 'is_null($z): ' . (@is_null($z) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = array();
echo '$x = array();' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = array('a', 'b');
echo '$x = array("a", "b´"");' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = false; 
echo '$x = false;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = true; 	
echo '$x = true;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = 1; 	
echo '$x = 1;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = 42; 	
echo '$x = 42;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = 0; 
echo '$x = 0;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = -1; 
echo '$x = -1;' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "1"; 
echo '$x = "1";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "0"; 	
echo '$x = "0";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "-1"; 	
echo '$x = "-1";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "php"; 
echo '$x = "php";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "true"; 
echo '$x = "true";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

echo PHP_EOL;

$x = "false";
echo '$x = "false";' . PHP_EOL;
var_dump($x);
echo 'is_null($x): ' . (is_null($x) ? "TRUE" : "FALSE") . PHP_EOL;

?>