<?php
include('includes/start.microtime.inc.php');

$dbname = 'seminarverwaltung';
require_once 'includes/pdo_connect.inc.php';

$ausgabe = "";

if(isset($_POST['s']) && $_POST['s'] != ""){

	$sql = "SELECT * FROM seminare WHERE titel LIKE '%" . $_POST['s'] . "%'";

	$stm = $db->query($sql);
	$result = $stm->fetchAll();
	foreach($result as $element){
		$ausgabe .= $element['titel'] . "<br />";
	}

}


if(isset($_POST['s2']) && $_POST['s2'] != ""){

	$data = array('suche'=>'%' . $_POST['s2'] . '%');

	$sql = "SELECT * FROM seminare WHERE titel LIKE :suche";

	$stm = $db->prepare($sql);
	$stm->execute($data);

	$result = $stm->fetchAll();
	var_dump($result);

	foreach($result as $element){
		$ausgabe .= $element['titel'] . "<br />";
	}	


	$param2 = "%{$_POST['s2']}%";
	$stmt2 = $db->prepare("SELECT * FROM seminare WHERE titel LIKE ?");
	$stmt2->bind_param("s2", $param2);
	$stmt2->execute();
	$stmt2->bind_result($titel);


	while ($stmt2->fetch()) {
		$ausgabe .= "{$titel} <br />";
	}



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
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">	
	<input type="search" id="s" name="s" value="" >	
	<input type="search" id="s2" name="s2" value="" >		
	<button type="submit">Suchen</button>
	</form>
	<p>
		<?php echo $ausgabe; ?>
	</p>
<?php





?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>