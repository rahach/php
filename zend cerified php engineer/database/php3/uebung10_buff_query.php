<?php
include('includes/start.microtime.inc.php');

$dbname = "seminarverwaltung";

try {
	$db = new PDO("mysql:dbname=" . $dbname . ";host=localhost", "root", "");
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,false);


$stm1 = $db->query("SELECT * FROM seminare");


$result1 = $stm1->fetch(); 

$stm2 = $db->query("SELECT * FROM seminare");


$result2 = $stm2->fetch(); 

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

echo "<pre>";
var_dump($result1);
echo "</pre>";
echo "<pre>";
var_dump($result2);
echo "</pre>";

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>