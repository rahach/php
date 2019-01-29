<h3>Aufgabe 14</h3>

<table>

<tr><th>Wetterstation</th><th>Geo Länge</th><th>Höhe</th></tr>

<?php

$result_string = "";

$sql = "SELECT Standort, Geo_Breite, Hoehe
		FROM wetterstation
		WHERE Hoehe=(SELECT MAX(Hoehe) FROM wetterstation WHERE Geo_Breite>51.15)";

$stm = $db->query($sql);

while($result = $stm->fetch()){
	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td></tr>";
}

echo $result_string;

?>
</table>