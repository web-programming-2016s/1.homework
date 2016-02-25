<?php

	// require another php file
	// ../../ => 2 folders back - navigating to where the config file it
	require_once ("../../config.php");
	$everything_was_okay = true;
	
	//*******************
	//To form validation
	//*******************
	if(isset($_GET["to"])){ //if there is ?to= in the URL
		if(empty($_GET["to"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please enter the user you want to challenge! <br>"; // yes it is empty
		}else{
			echo "Challengee: ".$_GET["to"]."<br>"; //no it is not empty
		}
	}else{
		$everything_was_okay = false; // do not exist
	}
	//check if there is variable in the URL
	if(isset($_GET["motion"])){
		
		//only if there is motion in the URL
		//echo "there is motion";
		
		//if its empty
		if(empty($_GET["motion"])){
			//it is empty
			$everything_was_okay = false;
			echo "Please enter the motion!";
		}else{
			//its not empty
			echo "Motion: ".$_GET["motion"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as motion";
		$everything_was_okay = false;
	}
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	//$my_motion = $_GET["motion"];
	//$to = $_GET["to"];
	
	
	//echo "My motion is ".$my_motion." and is to ".$to;
	
		/***********************
	**** SAVE TO DB ********
	***********************/
	
	// ? was everything okay
	if($everything_was_okay == true){
		
		echo "Sending Debattle Request ...";
		
		//connection with username and password
		//access username from config
		//echo $db_username;
		
		//1 servername
		//2 username
		//3 password
		//4 database
		$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_islam");
		
		$stmt = $mysql->prepare ("INSERT INTO debattle_request (challengee, motion, start_date, end_date, characters) VALUES (?,?,?,?,?)
		");
		
		//echo error
		echo $mysql->error;
		
		//we are repalcing question marks with values
		//s - string, date, smth that is based on characters and numbers
		// i - integer, number// d - decimanl, float
		
		//for each question mark its type with one letter
		$stmt->bind_param ("ssssi", $_GET["to"], $_GET["motion"], $_GET["bday"], $_GET["bday2"], $_GET["characters"]);
		
		//save
		if ($stmt->execute ()){
			echo "Request sent";
		}else{
			echo $stmt->error;
		}
	
	}
	
?>

<h2> Debattle Request </h2>

<form method="get">
	<label for="to">User to Challenge:* <label>
	<input type="text" placeholder="@" name="to"><br><br>
	
	<label for="motion">Motion:* <label>
	<input type="text" name="motion"><br><br>
	
	Position: <br>
	<input type="radio" name="Position" value="Pro" checked> Pro<br>
    <input type="radio" name="Position" value="Against"> Against<br><br>
	
	Visibility: <br>
	<input type="radio" name="Visibility" value="Open" checked> Open<br>
    <input type="radio" name="Visibility" value="Closed"> Closed<br><br>
	
	Start Date:
    <input type="date" name="bday"><br><br>
	End Date:
    <input type="date" name="bday2"><br><br>
	
	Select your favorite color:
    <input type="color" name="favcolor"><br><br>
	
	Set number of characters (between 1 and 300):
    <input type="number" name="characters" min="1" max="300"><br><br>
	
	<!-- This is the save button-->
	<input type="submit" value="Start the Challenge">

<form>