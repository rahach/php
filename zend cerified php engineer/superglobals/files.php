<?php
session_start();

if(isset($_FILES['myFile'])){
	echo '$_FILES: <br />';
	var_dump($_FILES);

	$startname = $_FILES['myFile']['tmp_name'];
	$zielname = $_FILES['myFile']['name'];
	$zielname = '../../../uploads/' . basename($zielname);
	if (@move_uploaded_file($startname, $zielname)) {
		echo '<p>Datei &uuml;bertragen!</p>';
		echo '<img src="' . $zielname . '" alt="myFile">';		
	} else {
		echo '<p>Fehler (evtl. Problem mit Zugriffsrechten)!</p>';
	}
}	

?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
		<link href="../css/basic_style.css?ts=<?php echo time();?>" rel="stylesheet" type="text/css" />
		<style>
			div {
				width: 45%;
				float: left;
				margin-right: 15px;
			}
			p { clear: both; text-align: center;}
		</style>
	</head>
	<body>
		<h3>Formulardaten senden</h3>
		<div>
		<form action="" enctype="multipart/form-data" method="post">
			<input type="hidden" name="MAX_FILE_SIZE" value="879394" />
			<input type="file" id="myFile" name="myFile" required="required" />
			<button type="submit">Senden</button>
		</form>
		

	<script src="../js/jquery/jquery-3.3.1.min.js"></script>
	<script>
		
	</script>
	</body>
</html>