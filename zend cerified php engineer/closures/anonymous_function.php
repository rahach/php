<?php

$greet = function($name)
{
    printf("Hallo %s\r\n", $name);
};

$greet('Welt');
$greet('PHP');

function z($x){
	return function ($y) use ($x){
		return str_repeat($x, $y);
	};
}

$a = z(2);
$b = z(3);

var_dump($a);
var_dump($b);

echo $a(3) . $b(2);

echo PHP_EOL;

$greet = function($name)
{
    printf("Hallo %s\r\n", $name);
};

var_dump($greet);

$greet('Welt');
$greet('PHP');

echo PHP_EOL;

$message = 'hallo';

// Kein "use"
$example = function () {
    var_dump($message);
};
$example();

// $message vererben
$example = function () use ($message) {
    var_dump($message);
};
$example();

// der Wert einer geerbten Variable ist der zum Zeitpunkt
// der Funktionsdefinition, nicht des Funktionsaufrufs
$message = 'welt';
$example();

// $message wieder herstellen
$message = 'hallo';

// vererben per Referenz
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// Der geänderte Wert im Eltern-Gültigkeitsbereich
// wird in der aufgerufenen Funktion reflektiert
$message = 'welt';
$example();

// Closures können ebenfalls reguläre Parameter akzeptieren
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hallo");



?>