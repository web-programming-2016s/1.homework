<?php

	//*****************
	//TO validation
	//*****************
	if (isset($_GET["location"])){//if there is "?location=" in the message
		if (empty($_GET["location"])){//if it is empty
		echo "Define location! <br>";//yes it is empty
		}else{
			echo "Location: ".$_GET["location"]."<br>";//no it is not empty
		}
	}
	
	//check if there is variable in the URL
	if (isset ($_GET["time"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		// if it is empty
		if (empty ($_GET["time"])){
			//it is empty
			echo "What time are you meeting? <br>";
		}else{
			//It is not empty
			echo "Time: ".$_GET["time"]."<br>";
		}
	}else{
		
	}
	
	
	
	if (isset($_GET["punishment"])){//if there is "?punishment=" in the message
		if (empty($_GET["punishment"])){//if it is empty
		echo "What's the punishment? <br>";//yes it is empty
		}else{
			echo "Punishment: ".$_GET["punishment"]."<br>";//no it is not empty
		}
	}
	
	if (isset($_GET["name"])){//if there is "?name=" in the message
		if (empty($_GET["name"])){//if it is empty
		echo "What's your name? <br>";//yes it is empty
		}else{
			echo "Name: ".$_GET["location"]."<br>";//no it is not empty
		}
	}
	
	
	//Getting the message from the address
	//if there is $name= .. then $_GET ["name"]
	//$my_message = $_GET ["message"];
	//$to = $_GET ["to"];
	//$urgency = $_GET ["urgency"];
	//echo "My message is " .$my_message. " and it is to " .$to;
	
	


?>
<h2> First Application </h2>

<form method="get">
	<label for="location">Location* <label><br>
	<input type="text" name="location"><br>
	
	<label for="time">Time* <label><br>
	<input type="text" name="time"><br>
	
	<label for="punishment">Punishment* <label><br>
	<input type="text" name="punishment"><br>
	
	<label for="name">Name* <label><br>
	<input type="text" name="name"><br>
	
	<input type="submit" value="Let The Game Begin!">
	
	
	


<form>