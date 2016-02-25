<?php
	//check if there is variable in the URL
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["message"])){
			//it is empty
			echo "Please enter the message!";
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

<h2> Debattle Request </h2>

<form method="get">
	<label for="to">User to Challenge:* <label>
	<input type="text" name="to"><br><br><br>
	
	<label for="message">Motion:* <label>
	<input type="text" name="message"><br><br><br>
	
	<input type="radio" name="Visibility" value="open" checked> Open<br>
    <input type="radio" name="Visibility" value="Closed"> Closed<br><br><br>
	
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