<?php

	//********************
	//To field validation
	//********************

	//check if there is variable in the URL
	//if ther is ?to= in the URL
	
	/* 
	Thanks, I added new code function here:
	function generateIdea(){

	}
	*/
	

	if(isset($_GET["who"])){ 
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["who"])){
			//its empty
			echo "Please enter the name to who you address <br>"; 
			
		}else{
			//its not empty
			echo "To: ".$_GET["who"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
		
// -------------------------------------------------------------------
		
	}
	
	
		if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["message"])){
			//its empty
			echo "Please enter the message <br>";
			
		}else{
			//its not empty
			echo "The message: ".$_GET["message"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
	}
	
// -------------------------------------------------------------------

		if(isset($_GET["from_who"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["from_who"])){
			//its empty
			echo "Please type your name <br>";
			
		}else{
			//its not empty
			echo "From: ".$_GET["from_who"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
	}
	
// -------------------------------------------------------------------

	//Getting the message from address
	// if there is ?name=... then $_get["name"]
	
	//$my_message = $_GET["message"];
	//$who = $_GET["who"];
	//$from_who = $_GET["from_who"];
	
	
	//echo "Message from ".$from_who. " to ".$who. " - " .$my_message;


?>

<h2> First application </h2>

<form method="get">
	<label for="who">For who the message:* <label><br>
	<input type="text" name="who"><br><br>

	<label for="message">Type your Message here:* <label><br>
	<input type="text" name="message"><br><br>
	
	<label for="from_who">From who the message:* <label><br>
	<input type="text" name="from_who"><br><br>
	
	<input type="submit" value="Send"><br>
	
	

<form>

<p>



</p>