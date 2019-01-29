<h3>Aufgabe 10</h3>

<table>

<tr><th>Wetterstation</th><th>Geo Länge</th><th>Geo Breite</th></tr>

<?php


$result_string = "";

$sql = "SELECT Standort, Geo_Laenge, Geo_Breite  FROM wetterstation
		WHERE Geo_Laenge < 10
		ORDER BY Geo_Laenge ASC";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td></tr>";

}

echo $result_string;

?>
</table>