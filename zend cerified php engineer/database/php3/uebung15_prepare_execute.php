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

<?php

$adressen = file('uebung_prepared_statements/adressen.db');

$stmt = $db->prepare('INSERT INTO adressen(pers_id, vorname, nachname, strasse, plz, stadt) VALUES(:pers_id,:vorname, :nachname, :strasse, :plz, :stadt)');

$i = 2001;

foreach($adressen as $element){
	$adresse = explode(';',$element);	

	$daten = array('pers_id'=>$i, 'vorname'=>utf8_encode($adresse[2]), 'nachname'=>utf8_encode($adresse[3]), 'strasse'=>utf8_encode($adresse[4]), 'plz'=>utf8_encode($adresse[5]), 'stadt'=>utf8_encode($adresse[6]));

	$stmt->execute($daten);
	$i++;
}




?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>