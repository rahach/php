<?php
include('includes/start.microtime.inc.php');




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
class Person {

  public $anrede = ['Frau', 'Herr'];
  public $name = '';
  public $vorname = '';

	public function zeigePerson($g) {
		if($g==0) {
			echo $this->anrede[0] . " " . $this->vorname . " " . $this->name;
		}else{
			echo $this->anrede[1] . " " . $this->vorname . " " . $this->name;
		}

	}
}



 $myPerson = new Person();



$myPerson->vorname  = "Marie";

$myPerson->name = "Huana";



 $myPerson->zeigePerson(0);


?>


		<?php include('includes/footer.inc.php'); ?>
		<script src="../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>