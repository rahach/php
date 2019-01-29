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
	$db = new PDO("mysql:dbname=seminarverwaltung;host=localhost", "root", "");
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}


if($db){

	// Kartesisches Produkt
	$sql1 = "SELECT * FROM seminare, kategorie"; 
	$stm1 = $db->query($sql1);
	$daten1 = $stm1->fetchAll();
	echo '$sql1: ' . count($daten1);

	echo '<br />';

	// WHERE
	$sql2 = "SELECT sem.* FROM seminare AS sem, kategorie AS kat 
	WHERE sem.kategorie_id=kat.id"; 
	$stm2 = $db->query($sql2);
	$daten2 = $stm2->fetchAll();
	echo '$sql2: ' . count($daten2);

	echo '<br />';

	// LEFT JOIN (Standardeinstellung, 'LEFT' ist optional)
	$sql3 = "SELECT sem.* FROM seminare AS sem 
	JOIN kategorie AS kat 
	ON sem.kategorie_id=kat.id"; 
	$stm3 = $db->query($sql3);
	$daten3 = $stm3->fetchAll();
	echo '$sql3: ' . count($daten3);


}

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>