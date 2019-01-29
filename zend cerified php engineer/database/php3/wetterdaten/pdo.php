<h3>PDO</h3>
<table>
<tr><th>RESULT</th></tr>
<?php
try{

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

	$sql1 = "SELECT DISTINCT Datum FROM wettermessung GROUP BY Datum ORDER BY Datum ASC";
	$sql2 = "SELECT DISTINCT Sonnenscheindauer FROM wettermessung GROUP BY Sonnenscheindauer ORDER BY Sonnenscheindauer ASC";

	$stm1 = $db->query($sql1);
	$result1 = $stm1->fetchAll(PDO::FETCH_NUM);

//	unset($stm1);

	$stm2 = $db->query($sql2);
	$result2 = $stm2->fetchAll(PDO::FETCH_NUM);

	foreach($result1 as $element):
?>
<tr><td><?php echo $element[0]; ?></td></tr>
<?php
	endforeach;

	foreach($result2 as $element):
?>
<tr><td><?php echo $element[0]; ?></td></tr>
<?php
	endforeach;
} catch(Exception $e) {
  echo "Failed: " . htmlspecialchars($e->getMessage());
}
?>
</table>