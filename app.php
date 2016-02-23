<?php
	//check if there is variable in the URL
	if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
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
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	//$my_message = $_GET["message"];
	//$to = $_GET["to"];
	
	
	//echo "My message is ".$my_message." and is to ".$to;
	
?>

<h2> First application </h2>

<form method="get">
   <label for="to">to:* <label><br>
   <input type="text" name="to"><br><br>
   
   <label for="message">Message:* <label><br>
   <input type="text" name="message"><br><br>
   
   <label for="email">email:* <label><br>
   <input type="text" name="email"><br><br>
   
   <!-- This is the save button--> 
   <input type="submit" value="Save to DB">
   
<form>


<p>Idea:calculator of revenue/expences  1)product name 
                                        2)Wholesale price
                                        3)Retail price
                                        4)Taxation info	
                                        5)blabalbala										
</p>