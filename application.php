<?php

	//check if there is variable in the URL
	if (isset ($_GET ["message"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["message"])){
			//it is empty
			echo "Please enter the message <br>";
		}else{
			//its not empty
			echo "Message: ".$_GET["message"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
	}
	
	//check if there is variable in the URL
	if (isset ($_GET ["to"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["to"])){
			//it is empty
			echo "Please enter the recipient <br> ";
		}else{
			//its not empty
			echo "to: ".$_GET["to"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
	}
		//check if there is variable in the URL
	if (isset ($_GET ["from"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["from"])){
			//it is empty
			echo "Please enter your name <br>";
		}else{
			//its not empty
			echo "From: ".$_GET["from"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
	}
	
	//Getting the message from the address
	// if there is ?name= .. then $_GET ["name"]
	//$my_message = $_GET["message"];
	//$to = $_GET ["to"];
	//$from = $_GET ["from"];
	
	//echo "My message is ".$my_message." and is to ".$to. " and is from " .$from;

	
	
?>

<h2> First Applications </h2>



<form>

<form method="get">

	<label for="from">From:* <label>
	<input type="text" name="from"<br><br>

	<label for="to">To:* <label>
	<input type="text" name="to"<br><br>

	
	<label for="message">Message:* <label>
	<input type="text" name="message"<br><br>
	
		
	<!-- This is the save buttn-->
	<input type="Submit" value="Save to DB">
	
	
<form>