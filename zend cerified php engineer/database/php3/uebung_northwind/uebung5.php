<h3>Übung 5</h3>
<table>
<tr><th>CategoryName</th><th>CompanyName</th></tr>
<?php
$sql = "SELECT cat.CategoryName, c.CompanyName FROM customers c
		LEFT JOIN orders o
		ON o.CustomerID=c.CustomerID
		LEFT JOIN order_details od
		ON od.OrderID=o.OrderID
		LEFT JOIN products p
		ON p.ProductID=od.ProductID
		LEFT JOIN categories cat
		ON cat.CategoryID=p.CategoryID
		WHERE c.CompanyName='Eastern Connection'
		GROUP BY cat.CategoryName
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