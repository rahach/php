<?php
include('includes/start.microtime.inc.php');

class Kreis{

	const PI = 3.14;

	public $radius = 0.0;


	public function flaeche(){
		return "Fläche: " . pow($this->radius, 2) * Kreis::PI . "<br />";
	}

	public function umfang(){
		return "Umfang: " . $this->radius * 2 * Kreis::PI . "<br />";
	}	

	public function PI(){
		return Kreis::PI . "<br />";
	}	

	public function __call($name, $parameter) {
		$result = "";
		$result .= "Laufwerke:<br />";
		foreach ($parameter as $element) {
			$result .= $element . "<br />";
		}
		return $result;
	}

}
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

<?php

$Kreis_A = new Kreis();
$Kreis_A->radius = 12.5;
echo $Kreis_A->flaeche();
echo $Kreis_A->umfang();
echo $Kreis_A->PI();
echo $Kreis_A->ghjgjhgjhg("ghjh", "ghjh", "ghjh");
echo serialize($Kreis_A);
?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>