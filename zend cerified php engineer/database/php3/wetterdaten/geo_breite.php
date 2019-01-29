<h3>Aufgabe 10</h3>

<table>

<tr><th>Wetterstation</th><th>Geo Breite</th></tr>

<?php


$result_string = "";

$sql = "SELECT Standort, Geo_Breite  FROM wetterstation
		WHERE Geo_Breite < 50
		ORDER BY Geo_Breite ASC";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td></tr>";

}

echo $result_string;

?>
</table>