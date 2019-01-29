<?php
include('includes/start.microtime.inc.php');
$dbname = 'seminarverwaltung';
require_once 'includes/pdo_connect.inc.php';

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung</title>
		<link href="../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>

	<table>
		<tr>
			<th>Titel</th><th>Beschreibung</th><th>Preis</th><th>Kategorie</th>
		</tr>
<?php

if($db){

	$sql = "SELECT sem.titel, sem.beschreibung, sem.preis, kat.name 
	FROM seminare AS sem
	LEFT JOIN kategorie AS kat
	ON sem.kategorie_id=kat.id"; 
	
	$stm = $db->query($sql);

	while($daten = $stm->fetch()){
?>
		<tr>	
			<td><?php echo $daten["titel"]; ?></td>
			<td><?php echo $daten["beschreibung"]; ?></td>
			<td><?php echo $daten["preis"]; ?></td>
			<td><?php echo $daten["name"]; ?></td>
		</tr>
<?php
	}
?>
	</table>
<?php
}
?>

		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>