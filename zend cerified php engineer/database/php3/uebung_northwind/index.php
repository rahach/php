<?php
include('../includes/start.microtime.inc.php');

$dbname = 'northwind';
require_once '../includes/pdo_connect.inc.php';

if(isset($_GET['cont'])) {
	$cont = $_GET['cont'];
} else {
	$cont = '';
}

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Northwind</title>
		<link href="../../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index.php?cont=ue5">Übung 5</a></li>
			<li><a href="index.php?cont=ue6">Übung 6</a></li>
			<li><a href="index.php?cont=ue7">Übung 7</a></li>
			<li><a href="index.php?cont=ue8">Übung 8</a></li>
			<li><a href="index.php?cont=ue9">Übung 9</a></li>
		</ul>
		</nav>

		<main>

<?php
	switch($cont) {
		case 'ue5':
		include('uebung5.php');
		break;
		case 'ue6':
		include('uebung6.php');
		break;
		case 'ue7':
		include('uebung7.php');
		break;
		case 'ue8':
		include('uebung8.php');
		break;
		case 'ue9':
		include('uebung9.php');
		break;		
		default:
		include('uebung9.php');
		break;
	}
	
?>
	
		</main>

		<?php include('../includes/footer.inc.php'); ?>
			<script src="../../js/jquery/jquery-3.3.1.min.js"></script>		
			<script>

			</script>
	</body>
</html>