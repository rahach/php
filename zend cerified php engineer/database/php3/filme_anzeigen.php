<?php
include('../includes/start.microtime.inc.php');

$dbname = 'filmverleih';
require_once '../includes/pdo_connect.inc.php';

$sql = "SELECT titel, spieldauer, erscheinungsjahr, kurzbeschreibung, genre_id, preiskategorie_id, CONCAT(vorname , ' ' , nachname), regisseur_id FROM filme
		LEFT JOIN regisseure r
		ON regisseur_id=r.id";

$stm = $db->query($sql);


?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung</title>
		<link href="../../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>


<table>
<tr><th>Titel</th><th>Spieldauer</th><th>Erscheiningsjahr</th><th>Kurzbeschreibung</th><th>Genre ID</th><th>Preiskategorie ID</th><th>Regisseur</th></tr>
<?php

while($result = $stm->fetch()){
	echo "<tr><td>" . $result[0] . "</td><td>" . $result[1] . "</td><td>" . $result[2] . "</td><td>" . $result[3] . "</td><td>" . $result[4] . "</td><td>" . $result[5] . '</td><td><div id=""><a href="regisseur_anzeigen.php?id=' . $result[7] . '">' . $result[6] . "</a></div></td></tr>";
}


?>
</table>
		<?php include('../includes/footer.inc.php'); ?>
		<script src="../../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>