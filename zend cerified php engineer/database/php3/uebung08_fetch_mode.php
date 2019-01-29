<?php
include('includes/start.microtime.inc.php');

$dbname = "test";


try {
	$db = new PDO("mysql:dbname=" . $dbname . ";host=localhost", "root", "");
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_LAZY);

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

$stm = $db->query("SELECT p.nachname AS nachname, p.vorname AS vorname, a.name AS abtlg_name, CONCAT (p2.nachname, ', ', p2.vorname) AS chef 
	FROM abteilung AS a 
	JOIN (SELECT * FROM personen ORDER BY RAND()) p 
	ON p.abtlg_id=a.uid 
	LEFT JOIN personen p2 ON p2.uid=a.chef_id
	GROUP BY a.name");

$start0 = microtime();	
while($result = $stm->fetch()){
	//$result['titel'];
	echo "<pre>";
	var_dump($result);
	echo "</pre>";
}
$ende0 = microtime();	
$dauer0 = floatval($ende0) - floatval($start0);




$stm2 = $db->query("SELECT p.nachname AS nachname, p.vorname AS vorname, a.name AS abtlg_name, CONCAT (p2.nachname, ', ', p2.vorname) AS chef 
	FROM abteilung AS a 
	JOIN (SELECT * FROM personen ORDER BY RAND()) p 
	ON p.abtlg_id=a.uid 
	LEFT JOIN personen p2 ON p2.uid=a.chef_id
	GROUP BY a.name");

$start1 = microtime();		
while($result2 = $stm2->fetch(PDO::FETCH_NUM)){
	//$result[1];
	echo "<pre>";
	var_dump($result2);
	echo "</pre>";
}
$ende1 = microtime();	
$dauer1 = floatval($ende1) - floatval($start1);


$stm3 = $db->query("SELECT p.nachname AS nachname, p.vorname AS vorname, a.name AS abtlg_name, CONCAT (p2.nachname, ', ', p2.vorname) AS chef 
	FROM abteilung AS a 
	JOIN (SELECT * FROM personen ORDER BY RAND()) p 
	ON p.abtlg_id=a.uid 
	LEFT JOIN personen p2 ON p2.uid=a.chef_id
	GROUP BY a.name");

$start2 = microtime();	
while($result3 = $stm3->fetch(PDO::FETCH_OBJ)){
	//$result3->titel;
	echo "<pre>";
	var_dump($result3);
	echo "</pre>";
}
$ende2 = microtime();	
$dauer2 = floatval($ende2) - floatval($start2);


$stm4 = $db->query("SELECT p.nachname AS nachname, p.vorname AS vorname, a.name AS abtlg_name, CONCAT (p2.nachname, ', ', p2.vorname) AS chef 
	FROM abteilung AS a 
	JOIN (SELECT * FROM personen ORDER BY RAND()) p 
	ON p.abtlg_id=a.uid 
	LEFT JOIN personen p2 ON p2.uid=a.chef_id
	GROUP BY a.name");

$start3 = microtime();	
while($result4 = $stm4->fetch(PDO::FETCH_BOTH)){

	//$result[0];$result['titel']; 
	echo "<pre>";
	var_dump($result4);
	echo "</pre>";
}
$ende3 = microtime();	
$dauer3 = floatval($ende3) - floatval($start3);

echo '<br />';
echo 'Fetchdauer: ' . $dauer0;
echo '<br />';
echo 'Fetchdauer: ' . $dauer1;
echo '<br />';
echo 'Fetchdauer: ' . $dauer2;
echo '<br />';
echo 'Fetchdauer: ' . $dauer3;

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>