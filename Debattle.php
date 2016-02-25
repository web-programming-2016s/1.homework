<?php
	$everything_was_okay = true;
	//check if there is variable in the URL
	if(isset($_GET["to"])){ //if there is ?to= in the URL
		if(empty($_GET["to"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please enter the user you want to challenge! <br>"; // yes it is empty
		}else{
			echo "To: ".$_GET["to"]."<br>"; //no it is not empty
		}
	}else{
		$everything_was_okay = false; // do not exist
	}
	//check if there is variable in the URL
	if(isset($_GET["motion"])){
		
		//only if there is motion in the URL
		//echo "there is motion";
		
		//if its empty
		if(empty($_GET["motion"])){
			//it is empty
			$everything_was_okay = false;
			echo "Please enter the motion!";
		}else{
			//its not empty
			echo "Motion: ".$_GET["motion"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as motion";
		$everything_was_okay = false;
	}
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	//$my_motion = $_GET["motion"];
	//$to = $_GET["to"];
	
	
	//echo "My motion is ".$my_motion." and is to ".$to;
	
?>

<h2> Debattle Request </h2>

<form method="get">
	<label for="to">User to Challenge:* <label>
	<input type="text" placeholder="@" name="to"><br><br>
	
	<label for="motion">Motion:* <label>
	<input type="text" name="motion"><br><br>
	
	Position: <br>
	<input type="radio" name="Position" value="Pro" checked> Pro<br>
    <input type="radio" name="Position" value="Against"> Against<br><br>
	
	Visibility: <br>
	<input type="radio" name="Visibility" value="open" checked> Open<br>
    <input type="radio" name="Visibility" value="Closed"> Closed<br><br>
	
	Start Date:
    <input type="date" name="bday"><br><br>
	End Date:
    <input type="date" name="bday"><br><br>
	
	Select your favorite color:
    <input type="color" name="favcolor"><br><br>
	
	Set number of characters (between 1 and 300):
    <input type="number" name="quantity" min="1" max="300"><br><br>
	
	<!-- This is the save button-->
	<input type="submit" value="Start the Challenge">

<form>