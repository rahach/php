<?php
	$db_name = 'uebung';
	require_once '../pdo_connect.inc.php';
	
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung 03</title>
		<link href="../css/basic_style.css?ts=<?php echo time();?>" rel="stylesheet" type="text/css" />
		<style>
			h3 {margin-top: 35px;}
			td { padding: 3px 5px;}
			.rechts {text-align: right;}
		</style>
	</head>
	<body>
		<h3>1. Eine Ausgabe aller Datensätze aus der Tabelle Personen</h3>
		<code>
			SELECT * FROM Personen;
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>   
		<?php
			$sql_1 = "SELECT * FROM Personen;";
			$stm_1 = $db->query($sql_1);
			$erg_1 = $stm_1->fetchAll();
			foreach($erg_1 as $item) {
				echo '<tr>';
				echo '<td>'.$item[0].'</td>';
				echo '<td>'.$item[1].'</td>';
				echo '<td>'.$item[2].'</td>';
				echo '<td>'.$item[3].'</td>';
				echo '<td>'.$item[4].'</td>';
				echo '<td>'.$item[5].'</td>';
				echo '</tr>';
			}
		?>
		</table>
		
		<h3>2. Eine Ausgabe aller Datensätze aus der Tabelle Personen sortiert nach Abteilung und Name</h3>
		<code>
			SELECT * FROM Personen ORDER BY Abteilung, Name;
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>3. Eine Ausgabe aller Datensätze aus der Tabelle Personen sortiert nach Abteilung - (absteigend) und Name</h3>
		<code>
		
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>4. Eine Ausgabe aller Datensätze aus der Tabelle Personen die aus Düren oder Köln stammen und einer Abteilung Entw arbeiten</h3>
		<code>
		
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>
		<?php
			
		?>
		</table>
	
		<h3>5. Eine Ausgabe aller Datensätze aus der Tabelle Personen bei denen sich im Feld Ort die Zeichenkette "zog" an beliebiger Stelle befindet</h3>
		<code>
		
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>6. Eine Ausgabe aller Datensätze aus der Tabelle Personen bei denen das Feld Plz innerhalb des Zahlenbereiches 52351 bis 52499 ist</h3>
		<code>
		
		</code>
		<table>
		<tr><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>7. Ausgabe der Anzahl der Mitarbeiter pro Abteilung</h3>
		<code>
		
		</code>
		<table>
		<tr><th>Abteilung</th><th>Personen pro Abteilung</th></tr>
		 
		<?php
			
		?>
		</table>
		
		<h3>8. Ausgabe aller Abteilungen mit einer Mitarbeiteranzahl ab 3 Personen</h3>
		<code>
		
		</code>
		<table>
		<tr><th>Abteilung</th><th>Personen pro Abteilung</th></tr>
		 
		<?php
			
		?>
		</table>
		
		<h3>9. Ausgabe aus den Tabellen Personen, Speisen und Bestellung in der unten dargestellten Ergebnistabelle</h3>
		<code>
		
		</code>
		<table>
		<tr><th>id</th><th>id_Kunde</th><th>id_Speise</th><th>id</th><th>Name</th><th>Abteilung</th><th>Tel</th><th>Plz</th><th>Ort</th><th>id</th><th>Gericht</th><th>Preis</th><th>Zutaten</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>10. Ausgabe aus den entsprechenden Tabellen Personen in der unten dargestellten Ergebnistabelle sortiert nach Namen</h3>
		<code>
		
		</code>
		<table>
		<tr><th>Name</th><th>Gericht</th><th>Preis</th></tr>
		<?php
			
		?>
		</table>
		
		<h3>11. Ausgabe die ermittelt, wer wie viele Gerichte bestellt hat und wie viel jeder einzelne bezahlen muss, sortiert nach Namen</h3>
		<code>
		
		</code>
		<table>
		<tr><th>Name</th><th>Anzahl</th><th>Gesamt</th></tr>
		<?php
			
		?>
		</table>
		
		
	<?php include("footer.inc.php"); ?>
	</body>
</html>