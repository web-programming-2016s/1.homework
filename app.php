<?php
	//*********************
	// TO field validation
	//*********************
	if(isset($_GET["to"])){ //if there is ?to= in the URL
		if(empty($_GET["to"])){ //if it is empty
			echo "Please enter the recipient! <br>"; // yes it is empty
		}else{
			echo "To: ".$_GET["to"]."<br>"; //no it is not empty
		}
	}
	//check if there is variable in the URL
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["message"])){
			//it is empty
			echo "Please enter the message! <br>";
		}else{
			//its not empty
			echo "Message: ".$_GET["message"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
	}
	
	
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	//$my_message = $_GET["message"];
	//$to = $_GET["to"];
	
	
	//echo "My message is ".$my_message." and is to ".$to;
	
?>

<h2> The Online Barter </h2>

<form method="get">
	<label for="to">Your Name: <label>
	<input type="text" name="to"><br><br>
	
	<label for="message">Your Email: <label>
	<input type="text" name="message"><br><br>
        
    <label for="to">#What_You_Want: <label>
	<input type="text" name="to"><br><br>
	
	<label for="message">#What_You_Need: <label>
	<input type="text" name="message"><br><br>
	
	<!-- This is the save button-->
	<input type="submit" value="Save to DB">

<form>
