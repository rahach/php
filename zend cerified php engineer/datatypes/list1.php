<?php

$array = array(1,2,3);


while($a = each($array)){

var_dump($a['value']);
var_dump($a[1]);

}

?>