<?php
header('Access-Control-Allow-Origin: *');

$dbname = 'klausur_fragen';
require_once '../includes/pdo_connect.inc.php';
/*
try {
	$db = new PDO("mysql:dbname=" . $dbname . ";host=localhost", "root", "");
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}
*/
$return_string = "<table>";

$stmt1 = $db->query('SELECT * FROM fragen');

while($result1 = $stmt1->fetch()){

$return_string .= '<tr><td>' . $result1['frage'] . '<br />' . $result1['creator'] . '</td></tr>';

$stmt2 = $db->query('SELECT * FROM antworten WHERE frage_id=' . $result1['uid'] );
$result2 = $stmt2->fetchAll();
	foreach ($result2 as $element) {
		if($element['corr_flag']==1){
			$return_string .= '<tr><td class="correct">' . $element['antwort'] . '</td></tr>';
		}else{
			$return_string .= '<tr><td>' . $element['antwort'] . '</td></tr>';			
		}

	}
}

$return_string .= "</table>";


echo $return_string;

?>