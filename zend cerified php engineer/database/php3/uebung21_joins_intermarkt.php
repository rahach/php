<?php
include('includes/start.microtime.inc.php');

$dbname = 'intermarkt';
require_once 'includes/pdo_connect.inc.php';

$sqlA = "SELECT k.Kunden_Nr, k.Name, SUM(bd.Menge*a.Preis) 
		FROM kunde k
		LEFT JOIN bestellung b
		ON b.Kunden_ID=k.Kunden_ID
		LEFT JOIN bestellung_details bd
		ON b.Bestell_ID=bd.Bestell_ID
		LEFT JOIN artikel a
		ON bd.Artikel_ID=a.Artikel_ID
		GROUP BY b.Kunden_ID";

$stmtA = $db->query($sqlA);

$resultA = $stmtA->fetchAll();

$sqlD = "SELECT k.Kunden_Nr, k.Name, SUM(bd.Menge*a.Preis) 
		FROM kunde k
		INNER JOIN bestellung b
		ON b.Kunden_ID=k.Kunden_ID
		LEFT JOIN bestellung_details bd
		ON b.Bestell_ID=bd.Bestell_ID
		LEFT JOIN artikel a
		ON bd.Artikel_ID=a.Artikel_ID
		GROUP BY b.Kunden_ID";

$stmtD = $db->query($sqlD);

$resultD = $stmtD->fetchAll();

$sqlB = "SELECT a.Artikel_Nr, a.Bezeichnung, SUM(bd.Menge*a.Preis) 
		FROM artikel a
		LEFT JOIN bestellung_details bd
		ON bd.Artikel_ID=a.Artikel_ID
		GROUP BY a.Artikel_Nr";

$stmtB = $db->query($sqlB);

$resultB = $stmtB->fetchAll();

$sqlC = "SELECT a.Artikel_Nr, a.Bezeichnung, SUM(bd.Menge*a.Preis) 
		FROM artikel a
		INNER JOIN bestellung_details bd
		ON bd.Artikel_ID=a.Artikel_ID
		GROUP BY a.Artikel_Nr";

$stmtC = $db->query($sqlC);

$resultC = $stmtC->fetchAll();

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
	<h4>Umsatz pro Kunde - LEFT JOIN</h4>	
	<table>
		<tr>
			<th>Kunden-Nr</th><th>Name</th><th>Umsatz</th>
		</tr>
<?php

foreach($resultA as $element){
	if(empty($element[2])){
		$element[2] = '0.00';
	}	
?>		
		<tr>
			<td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td>
		</tr>
<?php
}
?>		
	</table>
	<h4>Umsatz pro Kunde - INNER JOIN</h4>	
	<table>
		<tr>
			<th>Kunden-Nr</th><th>Name</th><th>Umsatz</th>
		</tr>
<?php

foreach($resultD as $element){
	if(empty($element[2])){
		$element[2] = '0.00';
	}	
?>		
		<tr>
			<td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td>
		</tr>
<?php
}
?>		
	</table>	
	<h4>Umsatz pro Artikel - LEFT JOIN</h4>	
	<table>
		<tr>
			<th>Artikel-Nr</th><th>Artikel</th><th>Umsatz</th>
		</tr>	
<?php

foreach($resultB as $element){
	if(empty($element[2])){
		$element[2] = '0.00';
	}
?>		
		<tr>
			<td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td>
		</tr>
<?php
}
?>		
	</table>
	</table>
	<h4>Umsatz pro Artikel - INNER JOIN</h4>	
	<table>
		<tr>
			<th>Artikel-Nr</th><th>Artikel</th><th>Umsatz</th>
		</tr>	
<?php

foreach($resultC as $element){
	if(empty($element[2])){
		$element[2] = '0.00';
	}		
?>		
		<tr>
			<td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td>
		</tr>
<?php
}
?>		
	</table>	
		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>