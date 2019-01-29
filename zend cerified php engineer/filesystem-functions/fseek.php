<?php

$fp = fopen('sample.txt', 'r');

fseek($fp, 0);
// lies einige Daten
$data = fgetss($fp, 50);
var_dump($data);
// gehe zurück an den Anfang der Datei
// das selbe wie rewind($fp);
fseek($fp, 0);