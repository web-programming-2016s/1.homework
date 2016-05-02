<?php
	//check if there is variable in the URL
	if(isset($_GET["day"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["day"])){
			//it is empty
			echo "Please enter the date!";
		}else{
			//its not empty
			echo "🏃: ".$_GET["day"]."<br>";
		}
		
	}

?>

<?php
	//check if there is variable in the URL
	if(isset($_GET["name"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["name"])){
			//it is empty
			echo "Please enter your name!";
		}else{
			//its not empty
			echo "Person: ".$_GET["name"]."<br>";
		}
		
	}

?>

<?php
	//check if there is variable in the URL
	if(isset($_GET["comment"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["comment"])){
			//it is empty
			echo "Please enter the message!";
		}else{
			//its not empty
			echo "📓: ".$_GET["comment"]."<br>";
		}
		
	}

?>




<?php
	//check if there is variable in the URL
	if(isset($_GET["mood"])){
		

			echo "Mood: ".$_GET["mood"]."<br>";

		}
	

?>









<link href="css/stylecss" rel="stylesheet">

<form>
  Enter a date:
  <input type="date" name="day" max="date("Y/m/d")"><br>
  Your name: <textarea name="name" rows="1" cols="40"></textarea><br>
  Comment: <textarea name="comment" rows="3" cols="60"></textarea><br>
  Choose Mood:
<input type="radio" name="mood" value="angry">Red
<input type="radio" name="mood" value="ok">Green
<input type="radio" name="mood" value="sad">Blue
<input type="radio" name="mood" value="happy">Yellow<br>



<input type="submit">






</form>