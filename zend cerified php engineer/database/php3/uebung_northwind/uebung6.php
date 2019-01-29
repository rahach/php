<h3>Übung 6</h3>
<table>
<tr><th>Artikel</th><th>verkaufte Einheiten</th></tr>
<?php
$sql = "SELECT p.ProductName, COUNT(od.OrderID) AS entity FROM orders o
		LEFT JOIN order_details od
		ON od.OrderID=o.OrderID
		LEFT JOIN products p
		ON p.ProductID=od.ProductID
		GROUP BY p.ProductName
		ORDER BY entity DESC
		LIMIT 20
		";

$stmt = $db->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $element){
?>
<tr><td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td></tr>
<?php 
}

?>

</table>