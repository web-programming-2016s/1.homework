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
			echo "You selected: <br>";
			echo "Please enter the dolphins color! <br>";
		}else{
			//its not empty
			echo "You selected: <br>";
			echo "Color: ".$_GET["color"]."<br>";
			$varv = $_GET["color"];
		}
	}else{
		echo "Nothing is added";
	}
	//Dorsal fin field validation 
	if(isset($_GET["color"])){
		if(empty($_GET["dorsal_fin"])){
			echo "Please enter the dorsal fin shape! <br>";
		}else{
			echo "Dorsal fin: ".$_GET["dorsal_fin"]."<br>";
		}
	}
	
	//Tail field 
	if(isset($_GET["tail"])){
		if($_GET["tail"]==="empty"){
				//it is empty
			echo "Please enter the dolphins tail shape! <br>";
		}else{
			//its not empty
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
		
		
			

?>

<h2> Identifying dolphins from pool 7 </h2>


	

<form method="get">
	<label for="color">Color: </label><br>
	<select name="color">
		<option value="grey">Grey
		<option value="dark grey">Dark grey
		<option value="empty"
						selected>Select color
	</select><br>

<form method="get">
	<label for="dorsal_fin">Dorsal fin: </label><br>
	<input type="radio" name="dorsal_fin" value="Straight">Straight<br>
	<input type="radio" name="dorsal_fin" value="Flabby">Flabby<br>
	
<form method="get">
	<label for="tail">Tail shape: </label><br>
	<select name="tail">
		<option value="broken">Broken
		<option value="not broken">Not broken
		<option value="empty"
						selected>Select tail shape
	</select><br>
	
<form method="get">
	<lable for="lenght">Lenght in meters:</label><br>
	<input type="number" placeholder="insert dolphins lenght" name="lenght"><br>
	<input type="submit" value="Save to DB">
