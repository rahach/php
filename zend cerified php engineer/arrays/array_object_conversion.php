<?php

$a = array('a', 'b'=>'c');
$b = (object)$a;
var_dump($b);
echo property_exists((object) $a, 'a') ? 'true' : 'false';
echo '-';
echo property_exists((object)$a, 'b')?'true' : 'false'; 



?>