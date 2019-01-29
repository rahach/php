<h3>Aufgabe 6</h3>

<table>

<tr><th>Betreiber</th></tr>

<?php


$result_string = "";

$sql = "SELECT DISTINCT Betreiber  FROM wetterstation";

$stm = $db->query($sql);

while($result = $stm->fetch()){

	$result_string .= "<tr><td>" . $result[0] . "</td></tr>";

}

echo $result_string;

?>
</table>