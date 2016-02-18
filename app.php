<?php
	//check if there is variable in the URL
		//**********************
	//TO validation
	//**********************
		if(isset($_GET["to"])){
		
	if(empty($_GET["to"])){
		echo "Please enter TO"."<br>";
		}
		else {
			echo "TO: =".$_GET["to"]."<br>";
		}
	}
	else{
		
	}
	//**********************
	//From validation
	//**********************
	if(isset($_GET["from"])){
		
	if(empty($_GET["from"])){
		echo "Please enter From"."<br>";
		}
		else {
			echo "from: =".$_GET["from"]."<br>";
		}
	}
	else{
		
	}
	//**********************
	//message validation
	//**********************	
	if(isset($_GET["message"])){
		
	if(empty($_GET["message"])){
		echo "Please enter a message"."<br>";
		}
		else {
			echo "Message: =".$_GET["message"]."<br>";
		}
	}
	else{
		
	}

// Getting the message from adddress
//if there is ?name=.. then $_GET["message"]

/*
$my_message = $_GET["message"];
$my_to = $_GET["to"];
$my_from = $_GET["from"];
echo "To : ".$my_to;
echo('<br>');
echo "From : ".$my_from;
echo('<br>');
echo " Message :".$my_message;
*/
?>
<h2> First application </h2>

<form method="get">
<label for ="from">From	</label> 
<input type="text" name ="from"><br><br>

<label for ="to">TO	</label> 
<input type="text" name ="to"><br><br>

	<label for ="message">Message *</label>
	<input type="text" name ="message"><br><br>
	
	<input type="submit" value ="Save to DB">



<form>
