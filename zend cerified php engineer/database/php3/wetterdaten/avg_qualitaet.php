<h3>Aufgabe 8</h3>

<table>

<tr><th>AVG Qualität</th></tr>

<?php


$result_string = "";

$sql = "SELECT AVG(Qualitaet)  FROM wettermessung";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td></tr>";

}

echo $result_string;

?>
</table>