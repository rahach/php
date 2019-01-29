<?php

echo '$_GET: ';
echo PHP_EOL;
foreach($_GET as $key=>$value){
	parse_str(urldecode($key), $result);  

	var_dump($result);
}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
	</head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<h3>GET</h3>
			<input type="text" id="theget" name="theget" required="required" />

			<h3>GET passing array</h3>
		    <select multiple="multiple" name="cars[]"> 
		        <option>Volvo</option> 
		        <option>Saab</option> 
		        <option>Mercedes</option> 
		    </select>

			<button type="submit">Send Get</button>		    
		</form>

		<br />
		<br />
		<br />		

		<?php 
			$data = array("eins"=>array(1,2,3), 3=>"rttrrt", "fünf"=>array("a", "b", "c")); 
			$encoded_string = http_build_query($data); 
		?>


		<a href="http://localhost/php_zend_zert/uebungen/superglobals/get.php?<?php echo urlencode($encoded_string); ?>">GET REQUEST</a>

		<?php
			if(isset($encoded_string)){
				var_dump(urldecode($encoded_string));
			}
		?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>
		<script>
			
		</script>
	</body>
</html>