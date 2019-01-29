<?php
include('includes/start.microtime.inc.php');
$dbname = 'test';
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
	<h3></h3>	

	<table>
		<tr>
			<th>MA Nachname</th><th>MA Vorname</th><th>Abteilung</th><th>Name Vorgesetzter</th>
		</tr>
<?php

if($db){

	$sql = "SELECT p.nachname AS nachname, p.vorname AS vorname, a.name AS abtlg_name, CONCAT (p2.nachname, ', ', p2.vorname) AS chef 
	FROM (SELECT * FROM personen ORDER BY RAND() ) p 
	LEFT JOIN abteilung AS a 
	ON p.abtlg_id=a.uid 
	LEFT JOIN personen p2 ON p2.uid=a.chef_id
	GROUP BY a.name";
 




	
	$stm = $db->query($sql);

	while($daten = $stm->fetch()){
?>
		<tr>	
			<td><?php echo $daten["nachname"]; ?></td>
			<td><?php echo $daten["vorname"]; ?></td>
			<td><?php echo $daten["abtlg_name"]; ?></td>
			<td><?php echo $daten["chef"]; ?></td>			
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