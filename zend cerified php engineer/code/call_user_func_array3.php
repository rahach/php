<?php

$func = function($arg1, $arg2){
	return $arg1 * $arg2;
};

echo call_user_func_array($func, array(2, 4));

?>