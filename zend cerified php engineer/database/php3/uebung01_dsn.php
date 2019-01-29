<?php
include('includes/start.microtime.inc.php');


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

<?php


try {
	$db = new PDO("mysql:dbname=test;host=localhost", "root", "");
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}


if($db){
	$sql = "SELECT * FROM personen WHERE nachname LIKE 'a__g%' OR vorname LIKE 'b%' LIMIT 10 ";
	$stm = $db->query($sql);


	$daten = $stm->fetchAll();
	foreach($daten as $person){	
		echo $person["vorname"] . ' - ' . $person["nachname"] . '<br />';
	}
}


/*
$sql = "CREATE TABLE tabelle ( id INTEGER PRIMARY KEY NOT NULL auto_increment, feld VARCHAR(1000) );";
$db->exec($sql);
$sql = "INSERT INTO tabelle (feld) VALUES ('Wert10');";
$db->exec($sql);
$sql = "INSERT INTO tabelle (feld) VALUES ('Wert11');";
$db->exec($sql);
*/

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>