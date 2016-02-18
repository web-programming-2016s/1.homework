<?php

	//Getting the message from address
	//if there is ?name=then $_GET["name"]
	$my_message =$_GET["message"];
	$to = $_GET ["to"];
	
	echo "My message is ".$my_message." and is to ".Sto;

?>

<h2> First application </h2>

<form method="get"> 
		<label for="message">Message:* <label><br>
		<input type="text" name="message"><br>
		<input type="submit" value="Save to DB"
		
		<label for="message">to:* <label><br>
		<input type="text" name="to"><br>
		
		
		<label for="message">Secret:* <lable><br>
		<input type="text" name="message"><br>
		<!--This is the save button-->
		<input type="submit" value="Post"
<form>