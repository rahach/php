<?php
require('connect_vars.inc.php');
try{
	$db = new MySQLi($server, $user, $pass, $database);
	$db->set_charset("utf-8");
} catch(Exception $e){
	echo 'Fehler: ' . $e->getMessage();
	exit();
}	
?>