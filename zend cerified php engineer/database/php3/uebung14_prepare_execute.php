<?php
include('includes/start.microtime.inc.php');

$dbname = 'seminarverwaltung';
require_once 'includes/pdo_connect.inc.php';

$daten = array('PDO-Seminar','Ein Seminar über PDO...', 1249.99, 2);
$daten2 = array('titel'=>'PDO-Seminar 2','beschreibung'=>'Noch ein Seminar über PDO...', 'preis'=>1249.99, 'kategorie_id'=>2);


$stmt = $db->prepare('INSERT INTO seminare(titel, beschreibung, preis, kategorie_id) VALUES(?, ?, ?, ?)');
$stmt->execute($daten);
$stmt2 = $db->prepare('INSERT INTO seminare(titel, beschreibung, preis, kategorie_id) VALUES(:titel, :beschreibung, :preis, :kategorie_id)');
$stmt2->execute($daten2);
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

		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>