<?php

function sowCrops() { return 'wheat'; }
function millWheat() { return 'flour'; }
function bake($flour) { return 'cupcake'; }

function generator() {
	$wheat = yield sowCrops();
	$flour = yield millWheat();
	return bake($flour);
};

$gen = generator();

foreach ($gen as $key => $value) {
	echo $key . ' => ' . $value . PHP_EOL;
}

echo $gen->getReturn();


function generator2(){
	$arr = array();
	for($i=0;$i<10;$i++){
		yield $i;
		array_push($arr, $i);
	}
	return $arr;
}


$gen2 = generator2();

foreach($gen2 as $key => $value){
	echo $key . "=>" . $value . PHP_EOL;
}

var_dump($gen2->getReturn());

function generator3(){
	$a = [1,2,3];
	yield from $a;
	yield from range(4,6);
	yield from sevenToNine();
}

function sevenToNine(){
	for($i=7;$i<10;$i++){
		yield $i;
	}
}

$gen3 = generator3();

foreach($gen3 as $key => $value){
	echo $key."=>".$value . PHP_EOL;
}



?>