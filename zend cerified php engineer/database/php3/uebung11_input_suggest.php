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


		<form>
			<label>PLZ Ort</label>
			<input type="text" name="plz" id="plz" value="" placeholder="PLZ" list="plz_list" />
			<datalist id="plz_list"></datalist>
			<input type="text" name="ort" id="ort" value="" placeholder="Ort"  list="ort_list" />			
			<datalist id="ort_list"></datalist>			
		</form>

		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

			$(document).ready(function(){
				$("#plz").on("input", function(){
					$("#ort").val("");

					if($("#plz").val().indexOf('|')>0){
						completeFormPlz();
					}
					else{												
						$.post("suggest.php", {"plz_string": $("#plz").val()}, function(data){
							console.log("post plz");
							console.log(data);
							$("#plz_list").html(data);
						});						
					}
				});

				$("#ort").on("input", function(){
					$("#plz").val("");					

					if($("#ort").val().indexOf('|')>0){
						completeFormOrt();
					}
					else{												
						$.post("suggest.php", {"ort_string": $("#ort").val()}, function(data){
							console.log("post ort");
							console.log(data);							
							$("#ort_list").html(data);
						});	
					}				
				});
			});

			function completeFormPlz(){
				var result = $("#plz").val().split("|");
				console.log("completeFormPlz");
				console.log(result);
				$("#plz").val(result[0]);
				$("#ort").val(result[1]);
			}

			function completeFormOrt(){
				var result = $("#ort").val().split("|");
				console.log("completeFormOrt");				
				console.log(result);
				$("#plz").val(result[0]);
				$("#ort").val(result[1]);
			}

		</script>
	</body>
</html>