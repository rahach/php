<h3>Übung 9</h3>
<table>
<tr><th>Kunde</th><th>Stadt</th><th>Umsatz</th></tr>
<?php
$sql = "SELECT c.CompanyName, c.City, SUM(od.UnitPrice*od.Quantity) AS Umsatz FROM customers c
		LEFT JOIN orders o
		ON o.CustomerID=c.CustomerID
		LEFT JOIN order_details od
		ON od.OrderID=o.OrderID
		LEFT JOIN products p
		ON p.ProductID=od.ProductID
		LEFT JOIN categories cat
		ON cat.CategoryID=p.CategoryID
		LEFT JOIN suppliers s
		ON s.SupplierID=p.SupplierID		
		WHERE s.CompanyName='Exotic Liquids' AND cat.CategoryName='Beverages'	
		GROUP BY c.CompanyName					
		HAVING Umsatz > 999
		ORDER BY Umsatz DESC
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