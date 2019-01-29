<?php
	if(isset($_GET['cont'])) {
		$cont = $_GET['cont'];
	} else {
		$cont = '';
	}
	if(isset($_GET['rid'])) {
		$rid = $_GET['rid'];
	} else {
		$rid = '';
	}
	$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
	
	$db = new PDO("mysql:dbname=filmverleih;host=localhost", "root", "");
	$db->query('SET NAMES utf8');
	
	$regi_str = '';
	$sql_a = "SELECT id, CONCAT(name,', ',vorname) AS regisseur FROM personen ORDER BY name ASC";
	$stm_a = $db->query($sql_a);
	
	while($erg_a = $stm_a->fetch()) {
		$regi_str .= '<option value="'.$erg_a['id'].'">'.$erg_a['regisseur'].'</option>';
	}
	
	$genre_str = '';
	$sql_b = "SELECT uid, name FROM genre ORDER BY name ASC";
	$stm_b = $db->query($sql_b);
	
	while($erg_b = $stm_b->fetch()) {
		$genre_str .= '<option value="'.$erg_b['uid'].'">'.$erg_b['name'].'</option>';
	}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
		<link href="../../css/basic_style.css?ts=<?php echo time();?>" rel="stylesheet" type="text/css" />
		<style>
			nav {width: 85%; margin: 0 auto; text-align:center;}
			nav ul {display: table;}
			nav ul li {display: table-cell; border: 1px solid gray; margin: 2px;}
			nav ul li a {display: block; padding: 5px;}
			nav ul li a:hover, nav ul li a.curr {background-color: silver;}
			tr:nth-of-type(odd) td {background-color: mintcream;}
			main {width: 85%; margin: 0 auto;}
			table tr th {border: 1px solid gray;padding: 4px;}
			table tr:hover td {background-color: mistyrose;}
			table td {padding: 2px 7px;}
			td.link {cursor: pointer;}
		</style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index.php?cont=af">Alle Filme</a></li>
			<li><a href="index.php?cont=fe">Film eintragen</a></li>
		</ul>
		</nav>
		<main>
		<?php
			switch($cont) {
				case 'af':
				include('filme_anzeigen.inc.php');
				break;
				case 'fe':
				include('eintragen.inc.php');
				break;
				case 'rd':
				include('regisseur.inc.php');
				break;
				default:
				include('filme_anzeigen.inc.php');
				break;
			}
			
		?>
	
		</main>
	<?php include("../footer.inc.php"); ?>
	<script src="../../js/jquery/jquery-3.3.1.min.js"></script>
	<script>
		$(document).ready(function(){
			
			
			
		}); // doc-ready ende
		function zeige_regisseur(id) {
			document.location.href = "index.php?cont=rd&rid="+id;
		}
	</script>
	</body>
</html>