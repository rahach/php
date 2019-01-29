<?php
include('../includes/start.microtime.inc.php');

$dbname = 'busunternehmen';
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
		<title>Busunternehmen</title>
		<link href="../../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index.php?cont=ue1">Übung 1</a></li>
			<li><a href="index.php?cont=ue2">Übung 2</a></li>
			<li><a href="index.php?cont=ue3">Übung 3</a></li>						
			<li><a href="index.php?cont=ue4">Übung 4</a></li>
		</ul>
		</nav>

		<main>

<?php
	switch($cont) {
		case 'ue1':
		include('uebung1.php');
		break;
		case 'ue2':
		include('uebung2.php');
		break;
		case 'ue3':
		include('uebung3.php');
		break;				
		case 'ue4':
		include('uebung4.php');
		break;
		default:
		include('uebung1.php');
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