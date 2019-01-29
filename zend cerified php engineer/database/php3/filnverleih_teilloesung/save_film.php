<?php
if(isset($_POST['titel'])) {
	$db_name = 'filmverleih';
	require_once 'pdo_connect.inc.php';
	$titel = trim($_POST['titel']);
	$spieldauer = trim($_POST['dauer']);
	$erscheinungsjahr = trim($_POST['release']);
	$kurzbeschreibung = trim($_POST['descr']);
	$genre_id = trim($_POST['genre']);
	$regisseur_id = trim($_POST['regi']);
	
	
	$sql = "INSERT INTO filme (titel, spieldauer, erscheinungsjahr, kurzbeschreibung, genre_id, regisseur_id) VALUES('".$titel."', '".$spieldauer."', ".$erscheinungsjahr.", '".$kurzbeschreibung."',".$genre_id."',".$regisseur_id.")";
	$stm = $db->query($sql);
	
	if($stm->rowCount() == 1) {
		$letzte_id = $db->lastInsertId();
		echo 'OK';
	} else {
		echo 'NOK';
	}
}

?>