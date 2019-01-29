<?php

$sql = "SELECT titel, spieldauer, erscheinungsjahr, kurzbeschreibung, g.name, CONCAT(vorname , ' ' , nachname), regisseur_id FROM filme
		LEFT JOIN regisseure r		
		ON regisseur_id=r.id
		LEFT JOIN genre g
		ON genre_id=g.uid";

$stm = $db->query($sql);


?>


<table>
<tr><th>Titel</th><th>Spieldauer</th><th>Erscheiningsjahr</th><th>Kurzbeschreibung</th><th>Genre</th><th>Regisseur</th></tr>
<?php

while($result = $stm->fetch()){
	echo "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . '</td><td><div id=""><a href="regisseur_anzeigen.php?cont=rd&id=' . $result[6] . '">' . $result[5] . "</a></div></td></tr>";
}


?>
</table>