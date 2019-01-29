<?php
echo "confirm1";
if((isset($_POST['film_titel']) && $_POST['film_titel'] != "")&&(isset($_POST['regisseur_name']) && $_POST['regisseur_name'] != "")&&(isset($_POST['film_dauer']) && $_POST['film_dauer'] != "")&&(isset($_POST['jahr']) && $_POST['jahr'] != "")&&(isset($_POST['genre']) && $_POST['genre'] != "")&&(isset($_POST['beschreibung']) && $_POST['beschreibung'] != "")){
echo "confirm2";

}




?>

<script src="../../js/jquery/jquery-3.3.1.min.js"></script>
<script>

			console.log("ready1");		
		$("#daten_eintragen").click(function(){
			console.log("ready2");
			var post_data = $("form").serialize();
			$.post("index.php?cont_fec", post_data, function(data){
				console.log(data);
			});
		});

</script>