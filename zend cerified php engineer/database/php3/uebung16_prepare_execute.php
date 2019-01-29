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


$suche = array(22000, 23000);

$stm = $db->prepare("SELECT * FROM adressen WHERE plz>= ? AND plz <= ?");
$result = $stm->execute($suche);

while($result2=$stm->fetch()){
	echo $result2[2] . " " . $result2[3] . "<br />";
}

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>