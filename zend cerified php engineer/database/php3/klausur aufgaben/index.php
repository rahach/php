<?php
include('../includes/start.microtime.inc.php');

$dbname = 'klausur_fragen';
require_once '../includes/pdo_connect.inc.php';

$anrede = ['Frau', 'Herr'];

var_dump($anrede);
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

		<form id="question_form">
			<input type="hidden" name="creator" value="Hachmeier" />
			<input type="text" name="frage" required />
			<input type="text" name="antwort_1" required /><input type="checkbox" name="korrekt_1" />
			<input type="text" name="antwort_2" required /><input type="checkbox" name="korrekt_2" />
			<input type="text" name="antwort_3" required /><input type="checkbox" name="korrekt_3" />			
			<button type="button" id="senden">Senden</button>
		</form>	

		<div id="saved_quest"></div>
		<?php include('../includes/footer.inc.php'); ?>
			<script src="../../js/jquery/jquery-3.3.1.min.js"></script>		
			<script>
				$(document).ready(function(){
					$("#senden").click(function(){
						var serialized = $("#question_form").serialize();
/*
						$.post('save_question_hachmeier.php', serialized, function(data){
							console.log(data);
						})
*/						
						$("#saved_quest").load('http://10.10.56.134/klausur_fragen/fragen_laden.php');												
					})
				})
			</script>
	</body>
</html>