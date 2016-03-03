<?php

	//require another php file
	// ../../../ means > 3 folders back
	require_once("../../config.php");
	
	$everything_was_okay = true;

	//*************************************
	//check if there is variable in the URL
	//*************************************
	
	if(isset($_GET["name"])) {
		
		//only if there is name in the URL
		//echo "there is name ";
		
		//if it's empty
		if(empty($_GET["name"])){
			echo "Please, enter the name of the recipient!"."<br>"; //it is empty
		}else{
			echo "Name: ".$_GET["name"]."<br>"; //its not empty
		}
	}else{
		echo "There is no such thing as name";
		
	}
	if(isset($_GET["from"])) {
		
		//only if there is from in the URL
		//echo "there is from ";
		
		//if it's empty
		if(empty($_GET["from"])){
			echo "Please, enter your name!"."<br>";	//it is empty
		}else{
			echo "From: ".$_GET["from"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as from";
		
	}
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message ";
		
		//if it's empty
		if(empty($_GET["message"])){
			echo "Please, enter the message!"."<br>"; //it is empty
		}else{
			echo "Message: ".$_GET["message"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as message";
		
	}
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	
	$my_message = $_GET["message"];
	$name = $_GET["name"];
	$from = $_GET["from"];

	
	
	
	//echo $from." says \"".$my_message."\" to ".$name;

?>

<h2> Achive Your Goal Application </h2>
<!DOCTYPE html>
<html>
<body>

<form action="">
Username:<br>
<input type="text" name="userid">
<br>
Password:<br>
<input type="password" name="psw">
</form>
</body>
</html>
<input type="submit" value="Sign In">
<input type="submit" value="Sign Up">

<br></br>
<form method="get">

	<label for="what">What:<label><br>
	<input type="text" name="what"><br>
	
	<label for="quantity">Quantity:<label><br>
	<input type="text" name="quantity"><br>
	
	<label for="deadline">Deadline:<label><br>
	<input type="text" name="deadline"><br>
	
	
	<input type="submit" value="Save">
	
	
<form>	
<br>
<a href="table.php">Check Your Achivements</a>
</br>

<!--*************************************************************************************************************************************************************-->
<!--IDEA: Make an application, where is possible to make a shopping list. Add product, edit or delete it. The list auto-deletes in a week-->
<!--*************************************************************************************************************************************************************-->
<!--2. IDEA: Make a GOAL application. Where you write your goal and try to achive having time limits. e.g. READ 2 books during this month. "Days and books to go". -->
<!--*************************************************************************************************************************************************************-->