<?php

if(isset($_GET['id'])){

	$sql = "SELECT titel, CONCAT(vorname, ' ', nachname) FROM filme
	LEFT JOIN regisseure r
	ON regisseur_id=r.id
	WHERE regisseur_id=" . $_GET['id'];

	$stm = $db->query($sql);
}
?>


<table>
<tr><th>Regisseur</th><th>Filme</th></tr>
<?php



$i = 0;
while($result = $stm->fetch()){	
	if($i === 0){
		echo '<tr><td rowspan="' . $stm->rowCount() . '" >' . $result[1] . "</td><td>" . $result[0] . "</td></tr>";
		$i++;		
	}else{
		echo "<tr><td>" . $result[0] . "</td></tr>";
		$i++;
	}
}


?>
</table>