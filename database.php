<?php

$dataExists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST["name"];
$artist = $_POST["artist"];
$bpm = $_POST["bpm"];
$genre = $_POST["genre"];
$description = $_POST["description"];

if($name && $artist){
	$dataExists = true;
}
}
?>
<html>
    <head>
	    <title>Oskar's database</title>
		
        <script type="text/javascript">
		
		    function validate(){
			    var name = document.getElementById('name').value;
				var artist = document.getElementById('artist').value;
				var error = '';
				var formIsValid = true;
				
				if(!name){
					error += "<br>Name field is required";
					formIsValid = false;
				}
				
				if(!artist){
					error += "<br>Artist field is required";
					formIsValid = false;
				}
				
				document.getElementById('errors').innerHTML = error;
				return formIsValid;
			}
		</script>		
		
	</head>

    <body> 
        <h3>Search-a-song Ltd.</h3>
		
		<?php
		    if($dataExists){
			    echo "<div>
				
				<br>Name: $name
				<br>Artist: $artist
				<br>BPM: $bpm
				<br>Genre: $genre
				<br>Description: $description
				
				</div>";
		    }
		?>
		

		<div id="errors" style="color: red;"></div>
		
        <form id="dataForm" method="post" onsubmit="return validate();" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <p />Name<span style="color: red;">*</span>: <input type="text" name="name" id="name" placeholder="Song name">
			<p />Artist<span style="color: red;">*</span>: <input type="text" name="artist" id="artist" placeholder="Artist">
			<p /><span title="Beats per minute">BPM: </span><input type="number" name="bpm" id="bpm" placeholder="BPM">
			<p />Genre: <select id="genre" name="genre" placeholder="Genre">
				<option>Blues</option>
				<option>Country</option>
				<option>Electronic</option>
				<option>Folk</option>
				<option>Hip hop</option>
				<option>Jazz</option>
				<option>Latin</option>
				<option>Pop</option>
				<option>R&B and soul</option>
				<option>Rock</option>
				<option>Alternative</option>
			</select>
			<p />Description: <textarea name="description" ></textarea>
			
			<p /><input type="submit" value="Search">
        </form>
	
		
   </body>

</html>