<?php
include('../includes/start.microtime.inc.php');

$dbname = 'filmverleih';
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
		<title>Übung</title>
		<link href="../../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index.php?cont=af">Alle Filme</a></li>
			<li><a href="index.php?cont=ar">Alle Regisseure</a></li>
			<li><a href="index.php?cont=as">Alle Schauspieler</a></li>						
			<li><a href="index.php?cont=fe">Film eintragen</a></li>
		</ul>
		</nav>

		<main>

<?php
	switch($cont) {
		case 'af':
		include('filme_anzeigen.php');
		break;
		case 'fe':
		include('film_eintragen.php');
		break;		
		case 'fec':
		include('film_eintragen_confirm.php');
		break;				
		case 'ar':
		include('regisseure_anzeigen.php');
		break;
		case 'as':
		include('schauspieler_anzeigen.php');
		break;				
		case 'rd':
		include('regisseur_anzeigen.php');
		break;
		default:
		include('filme_anzeigen.php');
		break;
	}
	
?>
	
		</main>

		<?php include('../includes/footer.inc.php'); ?>
<script src="../../js/jquery/jquery-3.3.1.min.js"></script>
<script>

			console.log("ready1");		
		$("#daten_eintragen").click(function(){
			console.log("ready2");
			var post_data = $("form").serialize();
			$.post("index.php?cont_fec", post_data, function(data){
				console.log(data);
			});
		});

</script>
	</body>
</html>