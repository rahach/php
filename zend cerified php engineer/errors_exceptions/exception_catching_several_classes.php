<?php

class ValidationException extends Exception { }

function myValidation() {
	if (empty($_POST)) {
		try{
			throw new ValidationException('No form fields entered' . PHP_EOL);
	echo $a;			
		} catch ( ValidationException | Exception $e) {
			// matches this class because of inheritance
			echo "Exception :" . $e->getMessage() . PHP_EOL;
		}
	}
}

try {
	myValidation();
} catch (ValidationException $e) {
	echo "Validation exception caught" . PHP_EOL;
	echo $e->getMessage();
} catch (Exception $e) {
	echo "General exception type caught" . PHP_EOL;
	echo $e->getMessage();	
}

?>