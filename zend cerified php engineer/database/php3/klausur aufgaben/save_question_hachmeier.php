<?php
//header('Access-Control-Allow-Origin: *');

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

if(isset($_POST['creator']) && isset($_POST['frage']) && isset($_POST['antwort_1']) && isset($_POST['antwort_2']) && isset($_POST['antwort_3']) ){

	$antworten = array();
	array_push($antworten, $_POST['antwort_1']);
	array_push($antworten, $_POST['antwort_2']);
	array_push($antworten, $_POST['antwort_3']);

	$truth_val = array();
	if(isset($_POST['korrekt_1'])){
		array_push($truth_val, 1);
	} else{ 
		array_push($truth_val, 0);
	}		
	if(isset($_POST['korrekt_2'])){
		array_push($truth_val, 1);
	} else{ 
		array_push($truth_val, 0);
	}		
	if(isset($_POST['korrekt_3'])){
		array_push($truth_val, 1);
	} else{ 
		array_push($truth_val, 0);
	}		

	$sql1="INSERT INTO fragen(frage, creator) VALUES ('" . $_POST['frage'] . "', '" . $_POST['creator'] . "')";
	$stmt1 = $db->query($sql1);

	if($stmt1->rowCount() > 0){
		$question_id = $db->lastInsertId(); 
	}

	for($i=0;$i<count($antworten); $i++){
		$sql2="INSERT INTO antworten(frage_id, antwort, corr_flag) VALUES (" . $question_id . ", '" . $antworten[$i] . "', '" . $truth_val[$i] .  "')";
		$stmt2 = $db->query($sql2);
	}	

	echo $return_string = "OK";
	
}else{

	echo $return_string = "NOK";
}
?>