<?php

	// require another php file
	// ../../../ => 3 folders back
	require_once("../../../config.php");

	$everything_was_okay = true;

	//*********************
	// TO field validation
	//*********************
	if(isset($_GET["to"])){ //if there is ?to= in the URL
		if(empty($_GET["to"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please enter the recipient! <br>"; // yes it is empty
		}else{
			echo "To: ".$_GET["to"]."<br>"; //no it is not empty
		}
	}else{
		$everything_was_okay = false; // do not exist
	}

	//check if there is variable in the URL
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["message"])){
			//it is empty
			$everything_was_okay = false;
			echo "Please enter the message! <br>";
		}else{
			//its not empty
			echo "Message: ".$_GET["message"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		$everything_was_okay = false;
	}
	
	
	
	/***********************
	**** SAVE TO DB ********
	***********************/
	
	// ? was everything okay
	if($everything_was_okay == true){
		
		echo "Saving to database ... ";
		
		
		//connection with username and password
		//access username from config
		//echo $db_username;
		
		// 1 servername
		// 2 username
		// 3 password
		// 4 database
		$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_piekos");
		
		$stmt = $mysql->prepare("INSERT INTO messages_sample (recipient, message) VALUES (?,?)");
			
		//echo error
		echo $mysql->error;
		
		// we are replacing question marks with values
		// s - string, date or smth that is based on characters and numbers
		// i - integer, number
		// d - decimal, float
		
		//for each question mark its type with one letter
		$stmt->bind_param("ss", $_GET["to"], $_GET["message"]);
		
		//save
		if($stmt->execute()){
			echo "saved sucessfully";
		}else{
			echo $stmt->error;
		}
		
		
	}
	
	

?>
<br>
<a href="table.php">table</a>
<h2> Bill splitter 2000 </h2>

<form method="get">
	<label for="Utility">Utility: <label>
	<input type="text" name="Utility"><br><br>
	
	<label for="Amount">Amount: <label>
	<input type="text" name="Amount"><br><br>

	<label for="Paid">Paid: <label>
	<input type="text" name="Paid"><br><br>

	<button type="button" class="btn btn-success">Success</button>
	
	<!-- This is the save button-->
	<input type="submit" value="Save to DB">

<form>
