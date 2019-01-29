<?php
$a = array('c', 'b', 'a');
$b = (object) $a;
$c = (array) $b;
var_dump($a);
var_dump($b);
var_dump($c);