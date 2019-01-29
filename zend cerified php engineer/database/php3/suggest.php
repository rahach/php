<?php

$dbname = 'test';
require_once 'includes/pdo_connect.inc.php';

$result_string = '';

if(isset($_POST['plz_string'])){
	$sql = 'SELECT ort, plz FROM plz WHERE plz LIKE "' . trim($_POST['plz_string']) . '%" LIMIT 15 ';
}
else if(isset($_POST['ort_string'])){
	$sql = 'SELECT ort, plz FROM plz WHERE ort LIKE "' . trim($_POST['ort_string']) . '%" LIMIT 15';
}


$stm = $db->query($sql);

if($stm->rowCount() > 0){
	while($result = $stm->fetch()){
		$result_string .= '<option value="' . $result[1] . '|' . $result[0] . '" >' . $result[1] . ' ' . $result[0] . '</option>';
	}
}
else{
	$result_string .= '<option value="nichts gefunden">nichts gefunden</option>';	
}

echo $result_string;

?>