<?php


class C extends ArrayObject{ 

}


$arr = array(1, 2, 3, 4, 1=>5, "farbe"=>"rot");

$obj = new C($arr);



$i = 0;
foreach ($obj as $key=>$value){

	$result = ($i !== count( $obj ) -1 ) ? $key . "=>" . $value . "\n" : $key . "=>" . $value; 		
	$i++;
	echo $result;

}

echo PHP_EOL;

echo $obj->count();

echo PHP_EOL;

var_dump($obj);

echo PHP_EOL;

echo $obj['farbe'];

echo PHP_EOL;

$ser = $obj->serialize();

echo $ser;

echo PHP_EOL;

$obj->ksort();

var_dump($obj);

echo PHP_EOL;

$obj->unserialize($ser);

var_dump($obj);


?>