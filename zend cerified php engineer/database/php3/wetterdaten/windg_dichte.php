<h3>Aufgabe 3</h3>

<table>

<tr><th>Datum</th><th>Standort</th><th>Max_Windgeschwindigkeit</th><th>Mittel_Bedeckungsgrad</th></tr>

<?php


$result_string = "";

$sql = "SELECT Datum, Standort, Max_Windgeschwindigkeit, Mittel_Bedeckungsgrad  FROM wettermessung 
		LEFT JOIN wetterstation
		ON Stations_ID=S_ID
		WHERE Datum LIKE '%01-01'";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td>" . $result[3] . "</td></tr>";

}

echo $result_string;

?>
</table>