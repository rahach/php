<?php
include('includes/start.microtime.inc.php');
$dbname = "seminarverwaltung";
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

$stm = $db->query("SELECT sem.titel, s.beginn, s.ende, r.name, s.id 
			FROM seminartermine s
			LEFT JOIN raum r
			ON s.raum_id=r.uid
			LEFT JOIN seminare sem
			ON sem.id=s.seminar_id");

$intval_array = array();
$strval_array = array();

while($result = $stm->fetch()){
	$temp_array_int = array();
	$temp_array_str = array();	
	foreach($result as $key => $value){
		if(is_int($key)){
			$temp_array_int[$key] = $value;
		}else{
			$temp_array_str[$key] = $value;
		}	
	}
	array_push($intval_array, $temp_array_int);
	array_push($strval_array, $temp_array_str);
}

echo "<pre>";
var_dump($intval_array);
echo "</pre>";

echo "<pre>";
var_dump($strval_array);
echo "</pre>";
?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>