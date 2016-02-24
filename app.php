<?php

	//check if there is variable in the URL
	if (isset ($_GET ["message"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["message"])){
			//it is empty
			echo " Please insert number of puppies seen on image 1! ";
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
			echo " Please insert number of puppies seen on image 2! ";
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
			echo " Please insert number of puppies seen on image 3 ";
		}else{
			//its not empty
			echo "from: ".$_GET["from"]."<br>";
		}
		
	}else{

	//echo "there is no such thing as message";
	}
		//check if there is variable in the URL
	if (isset ($_GET ["asi"])) {
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if (empty($_GET ["asi"])){
			//it is empty
			echo " Please insert number of puppies seen on image 4 ";
		}else{
			//its not empty
			echo "asi: ".$_GET["asi"]."<br>";
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

		<IMG SRC="https://uberfacts.files.wordpress.com/2012/12/puppies-9.jpg" ALT="image one" WIDTH=300 HEIGHT=300>
		<IMG SRC="http://creative.colorado.edu/~jupi6624/dm1/puppies.jpg" ALT="image two" WIDTH=300 HEIGHT=300>
		<IMG SRC="http://pethealthsupplements.com.au/wp-content/uploads/2015/06/tumblr_static_mom-dog-with-puppies.jpg" ALT="image three" WIDTH=300 HEIGHT=300>
		<IMG SRC="http://www.liveanimals.tv/wp-content/uploads/2014/03/golden-retriever-puppy-webcam.jpg" ALT="image four" WIDTH=300 HEIGHT=300>
<form>

<form method="get">

	<label for="from">IMAGE 1:* <label>
	<input type="text" name="from"<br><br>

	<label for="to">IMAGE 2:* <label>
	<input type="text" name="to"<br><br>

	
	<label for="message">IMAGE 3:* <label>
	<input type="text" name="message"<br><br>

	<label for="asi">IMAGE 3:* <label>
	<input type="text" name="asi"<br><br>
	
		
	<!-- This is the save buttn-->
	<input type="Submit" value="START THE PUPPY CALCULATOR">
	
	
<form>

<p> my idea is a puppy calculator

i am going to have pictures in a row. 
i am going to force the viewer to put the number of the puppies he/she sees in the pictures
then once the number of puppies is visible we can calculate is using simple numbers.