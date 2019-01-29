<?php
	$dbname = 'seminarverwaltung';
	require_once 'includes/pdo_connect.inc.php';

if(isset($_POST['start'])){

	$sql = "INSERT INTO seminartermine (beginn, ende, seminar_id, raum_id) VALUES ('" . $_POST['start'] . "', '" . $_POST['ende'] . "', " . $_POST['seminar'] . "," . $_POST['raum'] . ")";

	$stm = $db->query($sql);

	if($stm->rowCount() == 1){
		echo 'OK';		
	} else{
		echo 'NOK';				
	}

}



if(isset($_POST['show'])){

	$sql = "SELECT sem.titel, s.beginn, s.ende, r.name, s.id 
			FROM seminartermine s
			LEFT JOIN raum r
			ON s.raum_id=r.uid
			LEFT JOIN seminare sem
			ON sem.id=s.seminar_id";


	$stm = $db->query($sql);

	$result_string = "";

	if($stm->rowCount() > 0){

		$result = $stm->fetchAll();

		$result_string = "";

		foreach($result as $element){
			$result_string .= "<tr><td>" . $element[0] . "</td>";
			$result_string .= "<td>" . $element[1] . "</td>";
			$result_string .= "<td>" . $element[2] . "</td>";				
			$result_string .= "<td>" . $element[3] . "</td>";
			$result_string .= '<td><a href="#" class="del" onclick="del(' . $element[4] . ');">delete</a></td><td><a href="#" class="edit" onclick="edit(' . $element[4] . ');">edit</a></td></tr>';		
		} 
	}
	else{
		$result_string .= "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";
	}
	echo $result_string;					
}

if(isset($_POST['del_id'])){

	$sql = "DELETE FROM seminartermine WHERE id=" . $_POST['del_id'];

	$stm = $db->query($sql);

	if($stm->rowCount() == 1){
		echo 'OK';		
	} else{
		echo 'NOK';				
	}
}

if(isset($_POST['load_id'])){

	$sql = "SELECT * FROM seminartermine WHERE id=" . $_POST['load_id'];

	$stm = $db->query($sql);

	if($stm->rowCount() == 1){
		$result = $stm->fetch();
		echo $result['beginn'].'|'.$result['ende'].'|'.$result['seminar_id'].'|'.$result['raum_id'];
	} else{
		echo 'NOK';				
	}
}



?>