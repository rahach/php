<h3>Aufgabe 2</h3>

<table>

<tr><th>Standort</th><th>Höhe</th></tr>

<?php


$result_string = "";

$sql = "SELECT Standort, Hoehe  FROM wetterstation";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td></tr>";

}

echo $result_string;

?>
</table>