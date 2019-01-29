<?php

$sql = "SELECT * FROM personen WHERE id NOT IN (SELECT id from regisseure)";

$stm = $db->query($sql);


?>


<table>
<tr><th>Name</th><th>Vorname</th><th>Geburtsdatum</th></tr>
<?php

while($result = $stm->fetch()){
	echo "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td></tr>";
}


?>
</table>