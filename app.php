<?php

	//*********************
	// TITLE field validation
	//*********************
	if(isset($_GET["title"])){ //if there is ?title= in the URL
		if(empty($_GET["title"])){ //if it is empty
			echo "Please enter the recipient! <br>"; // yes it is empty
		}else{
			echo "Title: ".$_GET["title"]."<br>"; //no it is not empty
		}
	}

	//*********************
	// IMPORTANT field validation
	//*********************
	//check if there is variable in the URL
	if(isset($_GET["important"])){
		
		//only if there is important in the URL
		//echo "there is important";
		
		//if its empty
		if(empty($_GET["important"])){
			//it is empty
			echo "Please enter the important! <br>";
		}else{
			//its not empty
			echo "important: ".$_GET["important"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as important";
	}
	
	
	//*********************
	// MILESTONES field validation
	//*********************
	//check if there is variable in the URL
	if(isset($_GET["milestones"])){
		
		//only if there is milestones in the URL
		//echo "there is milestones";
		
		//if its empty
		if(empty($_GET["milestones"])){
			//it is empty
			echo "Please enter the milestones! <br>";
		}else{
			//its not empty
			echo "milestones: ".$_GET["milestones"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as milestones";
	}
	
	
	//*********************
	// DATE field validation
	//*********************
	//check if there is variable in the URL
	if(isset($_GET["date"])){
		
		//only if there is date in the URL
		//echo "there is date";
		
		//if its empty
		if(empty($_GET["date"])){
			//it is empty
			echo "Please enter the date! <br>";
		}else{
			//its not empty
			echo "date: ".$_GET["date"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as date";
	}
	

?>

<h2> Goal Tracker </h2>

<p>Goal Tracker is a online app, where people can keep track of their everyday goals.
The app let's users add the importance of the thing and to see what they have to accomplish to get it done.</p>

<form method="get">
	<label for="title">Title:* <label>
	<input type="text" name="title"><br><br>
	
	<label for="important">Important:* <label>
	<input type="text" name="important"><br><br>
	
	<label for="milestones">Milestones:* <label>
	<input type="text" name="milestones"><br><br>
	
	<label for="message">Message:* <label>
	<input type="text" name="message"><br><br>

	<!-- This is the save button-->
	<input type="submit" value="Save">

<form>


