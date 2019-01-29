<?php
/*
try {
	// generates a notice error (not caught)
	echo $thisVariableIsNotSet;
	// this would be a fatal error (is caught)
	badFunction();
} catch (Error $e) {
	echo "Error caught: " . $e->getMessage();
}
*/

function myHandler(int $errNo, string $errMsg, string $file, int $line) {
	echo "Error #[$errNo] occurred in [$file] at line [$line]: [$errMsg]";
}

set_error_handler('myHandler');

try {
	// This does not throw an Error
	5 / 0;

} catch ( Throwable $e ) {
	echo 'Caught error : ' . $e->getMessage();
}




?>