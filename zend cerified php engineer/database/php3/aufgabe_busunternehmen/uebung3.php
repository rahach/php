<h3>Übung 3</h3>
<table>
<tr><th>fahrtNr</th><th>bus</th><th>fahrerName</th><th>abfahrzeit</th><th>fahrtziel</th><th>fahrtdatum</th><th>ankunftszeit</th></tr>
<?php
$sql = "SELECT fahrtNr, CONCAT(polKz, ' ', hersteller), name, abfahrtzeit, fahrtziel, fahrtdatum, DATE_FORMAT(ADDTIME(ADDTIME(fahrtdatum,abfahrtzeit), fahrtzeit), '%Y-%m-%d %T')  FROM fahrt LEFT JOIN fahrer ON fahrt.fahrerNr=fahrer.fahrerNr LEFT JOIN fahrtziele ON fahrt.fahrtzielNr=fahrtziele.fahrtzielNr LEFT JOIN bus ON fahrt.busNr=bus.busNr";

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