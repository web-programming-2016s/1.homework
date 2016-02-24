<?php
	

	//goal title* field:
	if(isset($_GET["goal title"])){
		
		//if it's empty
		if(empty($_GET["goal title"])){
			//it is empty
			echo "Please fill the field!";
	}else{
			//its not empty
			echo "goal title: ".$_GET["goal title"]."<br>"; 
		}
		
	}else{
		//echo "there is no such thing as goal";
	}
	
	//for why is this goal important* field:
	if(isset($_GET["why is this goal important"])){
		
		//only if there is to* in the URL
		//echo "there is addressee";
		
		//if it's empty
		if(empty($_GET["why is this goal important"])){
			//it is empty
			echo "Please fill the field!";
	}else{
			//its not empty
			echo "why is this goal important: ".$_GET["why is this goal important"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as important goal?";
	}
	
//for From* field:
	if(isset($_GET["Compeltion date"])){
		
		//only if there is from* in the URL
		//echo "there is compeltion date";
		
		//if it's empty
		if(empty($_GET["Compeltion date"])){
			//it is empty
			echo "Please fill the field!";
	}else{
			//its not empty
			echo "Compeltion date: ".$_GET["Compeltion date"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as milestones";
	}
	
	//milestones:* field:
	if(isset($_GET["milestones"])){
		
		//if it's empty
		if(empty($_GET["milestones"])){
			//it is empty
			echo "Please fill the field!";
	}else{
			//its not empty
			echo "milestones: ".$_GET["milestones"]."<br>"; 
	}

?>

<title>Goal tracker</title>
<h1>Change the story!</h1>
<meta>Now it is really easy to keep your promises, 
enter your goal below and keep track of yout habits.</meta>
<form method="get">
<label for="goal title"> Goal title:*</label><br>
<input type="text" name="goal title"><br>
<label for="why is this goal important"> Why is this goal important:*</label><br>
<input type="text" name="why is this goal important"><br>
<label for="Compeltion date"> Compeltion date:*</label><br>
<input type="text" name="Compeltion date"><br>
<label for="milestones"> Milestones:</label><br>
<input type="text" name="milestones"><br>
<input type="submit" value="Save my goal"> 

</form>
