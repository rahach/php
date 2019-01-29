<h3>Übung 8</h3>
<table>
<tr><th>Jahr</th><th>Kategorie</th><th>Umsatz</th></tr>
<?php
$sql = "SELECT YEAR(o.OrderDate), cat.CategoryName, REPLACE(FORMAT(SUM(od.UnitPrice*od.Quantity), 2), ',','') FROM orders o
		LEFT JOIN order_details od
		ON od.OrderID=o.OrderID
		LEFT JOIN products p
		ON p.ProductID=od.ProductID
		LEFT JOIN categories cat
		ON cat.CategoryID=p.CategoryID
		WHERE YEAR(o.OrderDate) = 1997 AND cat.CategoryName IN ('Beverages', 'Condiments', 'Grains/Cereals')
		GROUP BY cat.CategoryName
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