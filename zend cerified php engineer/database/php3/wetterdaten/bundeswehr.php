<h3>Aufgabe 12</h3>

<table>

<tr><th>Wetterstation</th><th>Betreiber</th></tr>

<?php


$result_string = "";

$sql = "SELECT Standort, Betreiber  FROM wetterstation
		WHERE Betreiber='Bw'";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td></tr>";

}

echo $result_string;

?>
</table>