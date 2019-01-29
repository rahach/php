<?php
include('includes/start.microtime.inc.php');
$dbname = 'seminarverwaltung';
require_once 'includes/pdo_connect.inc.php';

$seminare_str = '<option value=""></option>';
$sql_a = "SELECT id, titel, beschreibung FROM seminare";
$stm_a = $db->query($sql_a);
$erg_a = $stm_a->fetchAll();

foreach($erg_a as $item){
	$seminare_str .= '<option value="' . $item['id'] . '" title="' . $item['beschreibung'] . '">' . $item['titel'] . '</option>';
}


$raum_str = '<option value=""></option>';
$sql_b = "SELECT uid, name FROM raum ORDER BY name ASC";
$stm_b = $db->query($sql_b);
$erg_b = $stm_b->fetchAll();

foreach($erg_b as $item){
	$raum_str .= '<option value="' . $item['uid'] . '">' . $item['name'] . '</option>';
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
		<h3>Seminartermin hinzufügen</h3>
		<form id="add_termin">
			<p>
			<label>Beginn/Ende</label>
			<input type="date" name="start" id="start" value="" required="required">
			<input type="date" name="ende" id="ende" value="" required="required">			
			</p>
			<p>
			<label>Seminar</label>
			<select name="seminar" id="seminar" required="required">			
				<?php echo $seminare_str; ?>
			</select>
			</p>
			<p>	
			<label>Raum</label>
			<select name="raum" id="raum" required="required">			
				<?php echo $raum_str; ?>
			</select>
			</p>				
			<button id="btn_save" type="button">Senden</button>
			<button id="btn_change" type="button">Änderungen speichern</button>			
		</form>


		<p>
			<table>
				<tr><th>Seminar</th><th>Beginn</th><th>Ende</th><th>Raum</th><th colspan="2">edit</th></tr>
				<tbody id="alleTermine">
				</tbody>
			</table>
		</p>

		<p id="message">

		</p>	


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>
			$(document).ready(function(){
				$("#btn_save").click(function(){

					var flag = true;
					$('input[required], select[required]').each(function(){
						if($(this).val() == ""){
							flag = false;
						}
					});

					if(flag){
						var post_string = $('#add_termin').serialize();						
						$.post("seminare_func.php", post_string, function(data){ 
							if(data == "OK"){ 
								zeigeTermine(); 
							} 
						});						
					}
				});
			});  // doc-ready Ende


			function zeigeTermine(){
				var post_string = 'show';
				$.post("seminare_func.php", post_string, function(data){ 
					if(data != ""){ 
						$("#alleTermine").html(data);
					} 
				});						
			}


			function del(id){
				if(confirm("Unwiderruflich löschen?")){
					var id = id;
					$.post("seminare_func.php", {"del_id": id}, function(data){ 
						zeigeTermine();
						if(data != "OK"){ 
							$("#message").html("Fehler beim Löschen");
						} 
					});
				}	
			}


			function edit(id){
				$.post("seminare_func.php", {"load_id": id}, function(data){ 
					var dataArray = data.split("|");
					$("#start").val(dataArray[0]);
					$("#ende").val(dataArray[1]);
					$("#seminar").val(dataArray[2]);
					$("#raum").val(dataArray[3]);
					$("#btn_save").hide();
					$("#btn_change").show();																									
					if(data == "NOK"){ 
						$("#message").html("Fehler beim Bearbeiten");
					} 
					zeigeTermine();					
				});
			}			

		</script>
	</body>
</html>