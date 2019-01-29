<h3>Neuen Film eintragen</h3>

<form method="post" action="index.php?cont=fec">
<p>
<label>Film Titel</label>	
<input type="text" id="film_titel" name="film_titel" value="">
</p>
<p>
<label>Regisseur Name</label>	
<input type="text" id="regisseur_name" name="regisseur_name" value="">
</p>
<p>
<label>Spieldauer</label>	
<input type="text" id="film_dauer" name="film_dauer" value=""> Minuten
</p>
<p>
<label>Erscheinungsjahr</label>	
<select name="jahr">
<?php
$elements .= '<option value=""></option>';
for($i = 1900;$i <= 2018; $i++){
	echo '<option value="' . $i . '">' . $i . '</option>';
}
?>
</select>
</p>
<p>
<label>Genre</label>	
<select name="genre">
<option value=""></option>
<option value="1">Scifi</option>
<option value="2">Fantasy</option>
<option value="3">Anime</option>
<option value="4">Action</option>
<option value="5">Horror</option>
<option value="6">Drama</option>
<option value="7">Abenteuer</option>
</select>
</p>
<p>
<label>Kurzbeschreibung</label>	
<textarea rows="4" cols="50" id="beschreibung" name="beschreibung">
</textarea>
</p>
<button id="daten_eintragen" type="submit">Daten eintragen</button>
</form>
<script src="../../js/jquery/jquery-3.3.1.min.js"></script>
<script>

			console.log("ready1");		
		$("#daten_eintragen").on("click", function(){
			console.log("ready2");
			var post_data = $("form").serialize();
			$.post("index.php?cont_fec", post_data, function(data){
				console.log(data);
			});
		});

</script>