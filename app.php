<?php

//**************
//to field validation
//******************
if(isset($_GET["to"])){
	
	
	
	if(empty($_GET["to"])){
		//it is empty
		echo "Please enter the recipient!";
		
		}else{
			//its not empty
		echo "to: ".$_GET["to"]."<br>";
	}
}


if(isset($_GET["from"])){
	
	
	
	if(empty($_GET["from"])){
		//it is empty
		echo "Please enter the recipient!";
		
		}else{
			//its not empty
		echo "from: ".$_GET["from"]."<br>";
	}
}

//check if there is variable in the URL
if(isset($_GET["message"])){
	
	//only if there is message in the URL
	//echo "there is a message";
	
	if(empty($_GET["message"])){
		//it is empty
		echo "Please enter the message!";
		
		}else{
			//its not empty
		echo "Message: ".$_GET["message"]."<br>";
	}
	
	
}


	



//Getting the message from address

$my_message = $_GET["message"];
$to = $_GET["to"];
$from = $_GET["from"];

//echo "My message is ".$my_message." and is to ".$to." and is from ".$from;






?>

<h2> First application </h2>

<form method="get">
<label for="message">Message:*<label><br>
<input type="text" name="message"><br><br>

<label for="from">from<label><br>
<input type="text" name="from"><br><br>


<label for="to">To<label><br>
<input type="text" name="to"><br><br>
<!--This is the save button -->
<input type="submit" value="Save to DB"



<form>