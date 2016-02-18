<?php
	
	//message
	if(isset($_GET["message"])) {
		echo "there is message";
	}
	
	if (empty($_GET["message"])){
	
		echo "please enter message! <br>";
	}
	else {
		echo "Message: ".$_GET["message"]."<br>";
		}
	
		if(isset($_GET["message"])) {
		echo "there is message";
	}
	//to
	if (empty($_GET["to"])){
	
		echo "please enter to! <br>";
	}
	else {
		echo "to: ".$_GET["to"]."<br>";
		}
		if(isset($_GET["to"])) {
		echo "there is to";
		}
		
		//from
		if (empty($_GET["from"])){
	
		echo "please enter from";
	}
	else {
		echo "from: ".$_GET["from"]."<br>";
		}
		if(isset($_GET["from"])) {
		echo "there is from";
		}
	
	
	//$to = $_GET["to"];
	//$my_message = $_GET["message"];
	//$from = $_GET["from"];
	
	//echo "My message is ".$my_message;
	//echo "and to is ".$to;
	//echo "and from is".$from;

?>

<h2> First application </h2>

<form method="get">

	<label for="to">to:* <label>
	<input type="text" name="to"><br><br>
	
	<label for="message">Message:* <label>
	<input type="text" name="to"><br><br>
	
	<label for="from">from:* <label>
	<input type="text" name="to"><br><br>
	
	<input type="submit" value="Save to DB">

<form>
