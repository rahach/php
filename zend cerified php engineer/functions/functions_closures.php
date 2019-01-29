<?php

$string = "Hello World!";

$closure = function() use ($string) {
	echo $string;
};

$closure();

?>