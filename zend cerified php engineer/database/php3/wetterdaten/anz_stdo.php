<h3>Aufgabe 7</h3>

<table>

<tr><th>Anzahl Wetterstationen</th></tr>

<?php


$result_string = "";

$sql = "SELECT COUNT( Standort)  FROM wetterstation";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td></tr>";

}

echo $result_string;

?>
</table>