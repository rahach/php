<?php

try {

	$options = array(
//		PDO::ATTR_PERSISTENT => true,
		PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
	);
	$db = new PDO("mysql:dbname=" . $dbname . ";host=localhost", "root", "localhost", $options);
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}
?>