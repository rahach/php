<?php

//aus php.net




namespace my\name; // siehe Abschnitt "Namespaces definieren"

class MyClass {  static function m_class(){ return __CLASS__; }  static function m_namespace(){ return __NAMESPACE__; }  static function m_method() { return __METHOD__; } static function m_dir() { return __DIR__; } static function m_line() { return __LINE__; } static function m_function() { return __FUNCTION__; } static function m_file() { return __FILE__; } }
function myfunction() { return "function"; }

const MYCONST = 1;

define( __NAMESPACE__ . '\X', strlen('hi'));

/*
$a = new MyClass;
$c = new \my\name\MyClass; // siehe Abschnitt "Globaler Namensraum"

define( 'Z', strlen('hi')); // siehe Abschnitt "Namespaces verwenden: Rückgriff auf globale Funktion/Konstante"

define( __NAMESPACE__ . '\X', strlen('hi')); // siehe Abschnitt "Namespaces verwenden: Rückgriff auf globale Funktion/Konstante"

$d = namespace\MYCONST; // siehe Abschnitt "Namespace-Schlüsselwort und __NAMESPACE__-Konstante"

$d = __NAMESPACE__ . '\MYCONST';
echo constant($d);
echo PHP_EOL;

$d = \my\name\myfunction();
echo $d;
echo PHP_EOL;


$d = '\Z';
echo constant($d);
echo PHP_EOL;

$d = Z;
echo $d;
echo PHP_EOL;

$d = \my\name\X;
echo $d;
echo PHP_EOL;

*/
use \my\name\MyClass as V;

$d = V::m_namespace();
echo 'V::m_namespace(): '.$d;
echo PHP_EOL;

$d = V::m_class();
echo 'V::m_class(): '.$d;
echo PHP_EOL;

$d = V::m_method();
echo 'V::m_method(): '.$d;
echo PHP_EOL;

$d = V::m_file();
echo 'V::m_file(): '.$d;
echo PHP_EOL;

$d = V::m_dir();
echo 'V::m_dir(): '.$d;
echo PHP_EOL;

$d = V::m_function();
echo 'V::m_function(): '.$d;
echo PHP_EOL;

$d = V::m_line();
echo 'V::m_line(): '.$d;
echo PHP_EOL;


use my\name as a;

$d = a\X;
echo $d;
echo PHP_EOL;

$d = a\MYCONST;
echo $d;
echo PHP_EOL;

?>