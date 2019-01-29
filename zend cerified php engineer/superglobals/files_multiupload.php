<?php
session_start();

if(isset($_FILES['myFile'])){
echo '$_FILES: <br />';
var_dump($_FILES);


	foreach($_FILES['myFile'] as $key => $value){
		for($i=0;$i<count($_FILES['myFile']['tmp_name']);$i++){
			$startname = $_FILES['myFile']['tmp_name'][$i];
			$zielname = $_FILES['myFile']['name'][$i];
			$zielname = '../../../uploads/' . basename($zielname);
			if (@move_uploaded_file($startname, $zielname)) {
				echo '<p>Datei &uuml;bertragen!</p>';
			} else {
				echo '<p>Fehler (evtl. Problem mit Zugriffsrechten)!</p>';
			}
		}	
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
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" method="post">
			<label for="myFile1">Datei auswählen:</label>
			<input type="file" id="myFile1" name="myFile[]" required="required" />
			<label for="myFile2">Datei auswählen:</label>			
			<input type="file" id="myFile2" name="myFile[]" required="required" />

			<button type="submit">Senden</button>
		</form>

<?php
	if ($ordner = opendir('../../../uploads/')) {
		while (false !== ($datei = readdir($ordner))) {
			if ($datei != '..' && $datei != '.') {
				echo '<img src="../../../uploads/' . $datei . '" width="100px" height="auto" />' . "\n";
			}
		}
		closedir($ordner);
	}
?>
		
	<script src="../js/jquery/jquery-3.3.1.min.js"></script>
	<script>
		
	</script>
	</body>
</html>