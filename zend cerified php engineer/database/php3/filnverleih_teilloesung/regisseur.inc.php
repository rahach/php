<?php

$sql = "SELECT CONCAT(name,', ', vorname,' Geboren am: ', geburtsdatum)  AS regisseur, id FROM personen WHERE id=".$rid;
$stm1 = $db->query($sql);
$regi_erg = $stm1->fetch();
echo '<h3>Filme von: '.$regi_erg['regisseur'].'</h3>';

$stm2 = $db->query("SELECT f.titel, f.kurzbeschreibung, f.erscheinungsjahr, g.name, f.spieldauer FROM filme f LEFT JOIN genre g ON g.uid=f.genre_id WHERE regisseur_id=".$regi_erg['id']);
?>

<table>
<tr>
	<th>Titel</th><th>Kurzbeschreibung</th><th>Release</th><th>Genre</th><th>Dauer</th>
</tr>
<?php
while($erg = $stm2->fetch()) {
	echo '<tr>';
	echo '<td>'.$erg['titel'].'</td>';
	echo '<td>'.$erg['kurzbeschreibung'].'</td>';
	echo '<td>'.$erg['erscheinungsjahr'].'</td>';
	echo '<td>'.$erg['name'].'</td>';
	echo '<td>'.$erg['spieldauer'].'</td>';
	echo '</tr>';
}
?>
</table>