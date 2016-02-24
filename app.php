<?php

 //getting the message from address
 // if there is ?name=.. then $_GET["name"]
 //$my_message = $_GET["message"];
 //$to = $_GET["to"];
 //$from = $_GET["from"];
 
	//check if there is variable in the URL
	if(isset($_GET["color"])){
		
		//only if there is message in the URL
		//echo "there is message"

		//if its empty
		if($_GET["color"]==="empty"){
				//it is empty
			echo "Please enter the dolphins color! <br>";
	}else{
		//its not empty
		echo "Color: ".$_GET["color"]."<br>";
	}
	}else{
		echo "Nothing is added";
	}
	//Dorsal fin field validation 
	
	if(empty($_GET["dorsal_fin"])){
		echo "Please enter the dorsal fin shape! <br>";
	}else{
		echo "Dorsal fin: ".$_GET["dorsal_fin"]."<br>";
		}
	
	
	//Tail field 
	if(isset($_GET["tail"])){
		if(empty($_GET["tail"])){
		echo "Please enter the tail shape! <br>";
	}else{
		echo "Tail shape: ".$_GET["tail"]."<br>";
		}
	}
	
	
	//lenght feild  
	if(isset($_GET["lenght"])){
		if(empty($_GET["lenght"])){
		echo "Please enter the dolphins lenght! <br>";
	}else{
		echo "Lenght: ".$_GET["lenght"]."<br>";
		}
	}
		
		
			 //echo "My message is ".$my_message." and is to ".$to." from ".$from;

?>

<h2> Identifying dolphins from pool 7 </h2>

<form> 
<label for="tail">Tail shape: <label><br>
	<input type="text" placeholder="Broken or not broken" name="tail"><br>
	

<form method="get">
	<label for="color">Color: <label><br>
	<select name="color">
		<option value="grey">Grey
		<option value="dark grey">Dark grey
		<option value="empty"
						selected>Select color
	</select><br>

<form method="get">
	<label for="dorsal_fin">Dorsal fin: <label><br>
	<input type="radio" name="dorsal_fin" value="Straight">Straight<br>
	<input type="radio" name="dorsal_fin" value="Flabby">Flabby<br>
	
<form method="get">
	<lable for="lenght">Lenght in meters:<label><br>
	<input type="number" placeholder="insert dolphins lenght" name="lenght"><br>
	<input type="submit" value="Save to DB">

	
<?php
