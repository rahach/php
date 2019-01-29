<h3>Aufgabe 1</h3>

<table>

<tr><th>S_ID</th><th>Standort</th><th>GEO Breite</th><th>GEO Länge</th><th>Höhe</th><th>Betreiber</th></tr>

<?php


$result_string = "";

$sql = "SELECT S_ID, Standort, Geo_Breite, Geo_laenge, Hoehe, Betreiber  FROM wetterstation";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . "</td><td>" . $result[5] . "</td></tr>";

}

echo $result_string;

?>
</table>