<h3>Aufgabe 11</h3>

<table>

<tr><th>Wetterstation</th><th>Geo Breite</th><th>Geo Laenge</th></tr>

<?php


$result_string = "";

$sql = "SELECT Standort, Geo_Breite, Geo_Laenge  FROM wetterstation
		WHERE Standort='Greifswald'";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td></tr>";

}

echo $result_string;

?>
</table>