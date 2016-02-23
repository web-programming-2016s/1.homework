

<body bgcolor="#908483"> 
<h1 style="color:#e4e4e4"> Leave your feedback </h1>
<h2 style="color:#e4e4e4"> First application </h2>
<style>

label  {color: #e4e4e4;}
echo {color: #e4e4e4;}
</style>
   
   
 
<form method="get">



	<label for="firstname">First name<label><br>
  <input type="text" name="firstname"><br>
  
 <label for="lastname">Last name<label><br>
  <input type="text" name="lastname"><br>

 <label for="e-mail">E-mail<label><br>
  <input type="text" name="e-mail"><br><br>
  
<label for="message">Message:*<label><br>
<input type="text" name="message"><br><br>

<h2 style="color:#F5F1ED">How are you satisfied with my work?</h2>
		
			<select name="dropdown">
				<option value="Satisfied"selected>Satisfied</option>
				<option value="Neutral">Neutral</option>
				<option value="Dissatisfied">Dissatisfied</option>
			</select>
		
	


<!--This is the save button -->
<input type="submit" value="Submit feedback"



<form><br>

<?php

//**************....
//to field validation
//******************




if(empty($_GET["firstname"])){
		//it is empty
		echo "Please enter the name!";
		
		}else{
			//its not empty
		echo "Fist name: ".$_GET["firstname"]."<br>";
	}

if(empty($_GET["lastname"])){
		//it is empty
		echo "Please enter the last name!";
		
		}else{
			//its not empty
		echo "Last name: ".$_GET["lastname"]."<br>";
	}

if(isset($_GET["e-mail"])){
	
	
	
	if(empty($_GET["e-mail"])){
		//it is empty
		echo "Please enter e-mail!";
		
		}else{
			//its not empty
		echo "E-mail: ".$_GET["e-mail"]."<br>";
	}
}

if(isset($_GET["dropdown"])){
	
	
	
	if(empty($_GET["dropdown"])){
		//it is empty
		echo "Please enter the result!";
		
		}else{
			//its not empty
		echo "dropdown: ".$_GET["dropdown"]."<br>";
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
//$my_message = $_GET["message"];
//$to = $_GET["to"];
//$from = $_GET["from"];

//echo "My message is ".$my_message." and is to ".$to." and is from ".$from;






?>