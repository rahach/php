<table>
<tr>
	<th>Titel</th><th>Kurzbeschreibung</th><th>Release</th><th>Genre</th><th>Dauer</th><th>Regisseur</th>
</tr>
<?php
$stm1 = $db->query("SELECT f.titel, f.kurzbeschreibung, f.erscheinungsjahr, g.name, f.spieldauer, CONCAT(p.name,', ',p.vorname) AS regisseur, p.id AS regi_id FROM filme f LEFT JOIN personen p ON f.regisseur_id=p.id LEFT JOIN genre g ON g.uid=f.genre_id");
while($erg = $stm1->fetch()) {
	echo '<tr>';
	echo '<td>'.$erg['titel'].'</td>';
	echo '<td>'.$erg['kurzbeschreibung'].'</td>';
	echo '<td>'.$erg['erscheinungsjahr'].'</td>';
	echo '<td>'.$erg['name'].'</td>';
	echo '<td>'.$erg['spieldauer'].'</td>';
	echo '<td class="link" onclick="zeige_regisseur('.$erg['regi_id'].')">'.$erg['regisseur'].'</td>';
	echo '</tr>';
}
?>
</table>
