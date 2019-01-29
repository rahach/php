<h3>Aufgabe 5</h3>

<table>

<tr><th>Stations_ID</th><th>Max_Windgeschwindigkeit</th></tr>

<?php


$result_string = "";

$sql = "SELECT Stations_ID, Max_Windgeschwindigkeit
		FROM Wettermessung
		WHERE Datum = '2011-12-24' AND Max_Windgeschwindigkeit > 20";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td></tr>";

}

echo $result_string;

?>
</table>