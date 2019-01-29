<?php require_once("config.inc.php"); ?>
<footer>
	<p>&copy; 
<?php 

if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
	$klasse = $_SESSION['klasse'];
} else{
	$_SESSION['user'] = 'unbekannt';
	$_SESSION['klasse'] = 'unbekannt';	
}

echo date('Y') . ' ' . $user . ' - ' . $klasse; 

$ende = microtime();

if(isset($start)){
	$dauer = floatval($ende) - floatval($start);
	echo '<br />';
	echo 'script execution time: ' . $dauer;
}

?>
	
	</p>
</footer>