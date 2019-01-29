<h3>Übung 7</h3>
<table>
<tr><th>Order ID</th><th>Company Name</th><th>Rechnungssumme</th></tr>
<?php
$sql = "SELECT o.OrderID, c.CompanyName, (SUM(od.UnitPrice*od.Quantity) + o.Freight) FROM orders o
		LEFT JOIN order_details od
		ON od.OrderID=o.OrderID
		LEFT JOIN customers c
		ON c.CustomerID=o.CustomerID
		GROUP BY o.OrderID
		ORDER BY o.OrderID ASC
		";

$stmt = $db->prepare($sql);

$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $element){
?>
<tr><td><?php echo $element[0]; ?></td><td><?php echo $element[1]; ?></td><td><?php echo $element[2]; ?></td></tr>
<?php 
}

?>

</table>