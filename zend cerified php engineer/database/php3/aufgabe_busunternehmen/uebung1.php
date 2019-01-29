<h3>Übung 1</h3>
<table>
<tr><th>fahrtNr</th><th>busNr</th><th>fahrerName</th><th>abfahrzeit</th><th>fahrtziel</th><th>fahrtdatum</th><th>geb. Plätze</th></tr>
<?php
$sql = "SELECT fahrtNr, busNr, fahrerNr, abfahrtzeit, fahrtzielNr, fahrtdatum, gebuchtePlaetze FROM fahrt";

$stmt = $db->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $element){
?>
<tr><td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td><td><?php echo $element[3]; ?></td><td><?php echo $element[4]; ?></td><td><?php echo $element[5]; ?></td><td><?php echo $element[6]; ?></td></tr>
<?php 
}

?>

</table>