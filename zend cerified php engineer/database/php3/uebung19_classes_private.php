<?php
include('includes/start.microtime.inc.php');
require_once('includes/php_functions.inc.php');
class Auto{

	private $raeder = 4;
	private $tueren = 4;
	public $marke = '';
	public $ps = 0;

	public function setRaeder($raeder){
		//setter
		$this->raeder = $raeder;
	}

	public function getRaeder(){
		//getter
		return $this->raeder;
	}

	public function getAuto(){
		return "Marke: " . $this->marke . "<br />" . "Türen: " . $this->tueren . "<br />" . "Räder: " . $this->raeder . "<br />" . "PS: " . $this->ps;
	}

	$myDatum = new FlipDate();
	echo $myDatum->flip('2013.11.22');

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

$Auto_A = new Auto();

$Auto_A->setRaeder(6);

$Auto_A->marke = 'VW';
$Auto_A->ps = 100;

echo $Auto_A->getAuto();

?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>