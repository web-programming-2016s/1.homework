<?php

	//check if there is variable in the URL
	if (isset ($_GET ["message"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["message"])){
			//it is empty
			echo " Bitch, enter the message you fool! ";
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
			echo " Bitch, enter the message you fool! ";
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
			echo " Bitch, enter the message you fool! ";
		}else{
			//its not empty
			echo "from: ".$_GET["from"]."<br>";
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

<h2> PUPPY CALCULATOR </h2>

		<IMG SRC="https://uberfacts.files.wordpress.com/2012/12/puppies-9.jpg" ALT="image one" WIDTH=500 HEIGHT=500>
		<IMG SRC="http://creative.colorado.edu/~jupi6624/dm1/puppies.jpg" ALT="image two" WIDTH=500 HEIGHT=500>
		<IMG SRC="http://pethealthsupplements.com.au/wp-content/uploads/2015/06/tumblr_static_mom-dog-with-puppies.jpg" ALT="image three" WIDTH=500 HEIGHT=500>

<form>

<form method="get">

	<label for="from">From:* <label>
	<input type="text" name="from"<br><br>

	<label for="to">to:* <label>
	<input type="text" name="to"<br><br>

	
	<label for="message">message:* <label>
	<input type="text" name="message"<br><br>
	
		
	<!-- This is the save buttn-->
	<input type="Submit" value="Save to DB">
	
	
<form>

<p> my idea is a puppy calculator

i am going to have pictures in a row. 
i am going to force the viewer to put the number of the puppies he/she sees in the pictures
then once the number of puppies is visible we can calculate is using simple numbers.