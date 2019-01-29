<?php

$matches;

preg_match('/^(\d{1,2}([a-z]+))(?:\s*)\S+ (?=201[0-9])/', '21st March 2014', $matches);

var_dump($matches);


$test="";
var_dump(preg_match('/^\d+(?:\.[0-9]+)?$/', $test));

?>