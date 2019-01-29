<?php
include('includes/start.microtime.inc.php');

class Computer {
	const T = 42;
	public $CPU = "Die CPU";
	public function starten() {
		return "Computer ist gestartet.";
	}

	public function getCPU(){
		return $this->CPU;
	}
}

class Laptop extends Computer {
	public $Display = "15 Zoll";

	public function starten() {
		return "Laptop ist gestartet.";
	}	

	public function starten2() {
		return "Laptop: " . parent::starten() . " mit CPU " . parent::getCPU() . " " . parent::T;
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

$MeinLaptop = new Laptop();
$MeinLaptop->CPU = "2,5 GHZ Mobile";
echo "CPU: " . $MeinLaptop->CPU . "<br/>";
echo "Display: " . $MeinLaptop->Display . "<br/>";
echo $MeinLaptop->starten() . "<br/>";
echo $MeinLaptop->starten2() . "<br/>";
?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>