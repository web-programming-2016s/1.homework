<?php


	//check if there is variable in the URL
	
	
	//for Message* field:
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if it's empty
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
	
	//for To* field:
	if(isset($_GET["to"])){
		
		//only if there is to* in the URL
		//echo "there is addressee";
		
		//if it's empty
		if(empty($_GET["to"])){
			//it is empty
			echo "Please enter the addressee!";
	}else{
			//its not empty
			echo "To: ".$_GET["to"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as addressee";
	}
	
//for From* field:
	if(isset($_GET["from"])){
		
		//only if there is from* in the URL
		//echo "there is addresser";
		
		//if it's empty
		if(empty($_GET["from"])){
			//it is empty
			echo "Please enter the addresser!";
	}else{
			//its not empty
			echo "From: ".$_GET["from"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as addressee";
	}
	
//Getting the message from address
//if there is ?name= .. then $_GET["name"]
//$my_message = $_GET["message"];
//$to = $_GET["to"];
//$from = $_GET["from"];


//echo "My message is ".$my_message." for"." ".$to." from "." ".$from;



?>

<h2> First application </h2>

<form method="get">
<label for="message"> Message:*</label><br>
<input type="text" name="message"><br>
<label for="to"> To:*</label><br>
<input type="text" name="to"><br>
<label for="from"> From:*</label><br>
<input type="from" name="from"><br>
<input type="submit" value="Save to DB"> 

	

</form>