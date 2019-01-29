<h3>Aufgabe 9</h3>

<table>

<tr><th>Datum</th><th>Standort</th><th>Max_Windgeschwindigkeit</th><th>Mittel_Bedeckungsgrad</th></tr>

<?php


$result_string = "";

$max_date = "";

$sql1 = "SELECT MAX(Datum) FROM wettermessung";

$stm1 = $db->query($sql1);

while($result1 = $stm1->fetch()){
	$max_date = $result1[0];
}

$theDate = date('Y-m-d', strtotime('last Wednesday', strtotime($max_date)));

echo $theDate;

$sql2 = "SELECT Datum, Standort, Niederschlagshoehe FROM wettermessung 
		LEFT JOIN wetterstation
		ON Stations_ID=S_ID
		WHERE Standort='Zugspitze' AND Datum=" . $theDate;

$stm2 = $db->query($sql2);

while($result2 = $stm2->fetch()){

	$result_string .= "<tr><td>" . $result2[0] . "</td><td>" . $result2[1] . "</td><td>" . $result2[2] . "</td><td>" . $result2[3] . "</td></tr>";

}

echo $result_string;

?>
</table>