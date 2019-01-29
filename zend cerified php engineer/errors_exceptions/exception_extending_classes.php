<?php

class ParentException extends Exception {  }
class ChildException extends ParentException {  }

try {
	// some code
	throw new ChildException('My Message');
} catch (ParentException $e) {
	// matches this class because of inheritance
	echo "Parent Exception :" . $e->getMessage();
} catch (ChildException $e) {
	// matches this class exactly
	echo "Child Exception :" . $e->getMessage();
} catch (Exception $e) {
	// matches this class because of inheritance
	echo "Exception :" . $e->getMessage();
}

?>