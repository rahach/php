<?php

function myExceptionHandler (Exception $e){
    echo $e->getMessage() . PHP_EOL, $e->getFile() . PHP_EOL, $e->getLine() . PHP_EOL, $e->getTraceAsString() . PHP_EOL, $e->getCode() . PHP_EOL;
}

set_exception_handler("myExceptionHandler");

function A() {
	// The exception thrown in C will bubble up to A
	// because it is not handled in C or B
//	try {
		B();
//	} catch (Exception $e) {
//		echo "Caught exception in " . __METHOD__ . PHP_EOL;
//	}
}

function B() {
	// we're not catching exceptions in B
	C();
}

function C() {
	// we do not catch the exception where it is thrown
		throw new Exception('Bubble');
}

A();


?>