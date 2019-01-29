<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
		<link href="../css/basic_style.css?ts=<?php echo time();?>" rel="stylesheet" type="text/css" />
		<style>
			
		</style>
	</head>
	<body>
		<h4>PDO Objekt</h4>
		<?php
			$db = new PDO("mysql:dbname=seminarverwaltung;host=localhost", "root", "localhost");

			echo '<pre>';
			var_dump($db);
			echo '</pre>';		
		?>
		<p>mit "new PDO()" erhalten wir ein Objekt "$db"</p>
		<h4>PDO Statement Objekt</h4>
		<?php
			$stm = $db->query("SELECT * FROM seminare LIMIT 2");
			echo '<pre>';
			var_dump($stm);
			echo '</pre>';
		?>
		<p>mit "$db->query()" erhalten wir ein Objekt "$stm"</p>
		
		<h4>die Methode "fetchAll()"</h4>
			<?php
			$stm2 = $db->query("SELECT * FROM seminare LIMIT 2");
			$erg2 = $stm2->fetchAll();
			echo '<pre>';
			var_dump($erg2);
			echo '</pre>';
			
			?>
		<p>mit "fetchAll()" erhalten wir alle Ergebnisdatensätze. </p>
		
		<h4>die Methode "fetch()"</h4>
			<?php
			$stm3 = $db->query("SELECT * FROM seminare LIMIT 2");
			$erg3 = $stm3->fetch();
			echo '<pre>';
			var_dump($erg3);
			echo '</pre>';
			
			?>
		<p>mit "fetch()" erhalten wir nur einen Ergebnisdatensatz (den ersten). </p>
		
	<?php include("footer.inc.php"); ?>
	<script src="../js/jquery/jquery-3.3.1.min.js"></script>
	<script>
		
	</script>
	</body>
</html>