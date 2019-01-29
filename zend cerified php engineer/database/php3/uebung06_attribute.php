<?php
include('includes/start.microtime.inc.php');

$dbname = "test";

$optionen = array(PDO::ATTR_PERSISTENT=>true, PDO::ERRMODE_EXCEPTION);

try {
	$db = new PDO("mysql:dbname=" . $dbname . ";host=localhost", "root", "", $optionen);
	$db->query("SET NAMES utf8");	
} catch (PDOException $e) {
	echo 'Fehler: ' . htmlspecialchars($e->getMessage());
	exit();
}

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



?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>