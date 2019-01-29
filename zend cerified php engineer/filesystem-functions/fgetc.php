<?php
$fp = fopen('sample.txt', 'r');
if (!$fp) {
    echo 'Could not open file somefile.txt';
}
$char = fgetc($fp);
var_dump($char);