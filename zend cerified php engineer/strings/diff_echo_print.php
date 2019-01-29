<?php

class ValidationException extends Exception { }

$a = "A";
$result = "";


/*
	echo does not return a value
*/
function checkEchoOutput(string $val, string &$out){
	if( eval('echo $val;') != NULL ){
		$out .= 'echo $val works' . PHP_EOL;
	} else{
		$out .= 'echo $val does not work' . PHP_EOL;	
	}
}


function checkPrintOutput(string $val, string &$out){
	if( print($val) != NULL ){		
		$out .= 'print($val) works' . PHP_EOL;
	} else{
		$out .= 'print($val) does not work' . PHP_EOL;	
	}
}

ob_start();

checkEchoOutput($a,$result);
checkPrintOutput($a,$result);

ob_end_clean();

echo $result;

?>