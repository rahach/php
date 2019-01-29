<?php

$a = array (1, 2, array(1,2)); 
$a[3] = array(3,4);

echo "count rekursiv: " . count($a, 1) . "\n";
echo "count nicht rekursiv: " . count($a) . "\n";

?>