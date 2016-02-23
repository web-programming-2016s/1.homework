<?php

	//********************
	//To field validation
	//********************

	//check if there is variable in the URL
	//if ther is ?to= in the URL
	
	/* 
	Thanks, I added new code function here:
	function generateIdea(){

	}
	*/
	

	if(isset($_GET["who"])){ 
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["who"])){
			//its empty
			echo "Please enter the name to who you address <br>"; 
			
		}else{
			//its not empty
			echo "To: ".$_GET["who"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
		
// -------------------------------------------------------------------
		
	}
	
	
		if(isset($_GET["message"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["message"])){
			//its empty
			echo "Please enter the message <br>";
			
		}else{
			//its not empty
			echo "The message: ".$_GET["message"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
	}
	
// -------------------------------------------------------------------

		if(isset($_GET["from_who"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty ($_GET["from_who"])){
			//its empty
			echo "Please type your name <br>";
			
		}else{
			//its not empty
			echo "From: ".$_GET["from_who"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		
	}
	
// -------------------------------------------------------------------

	//Getting the message from address
	// if there is ?name=... then $_get["name"]
	
	//$my_message = $_GET["message"];
	//$who = $_GET["who"];
	//$from_who = $_GET["from_who"];
	
	
	//echo "Message from ".$from_who. " to ".$who. " - " .$my_message;


?>

<html>

<head>
<!--This is a part not directly visible for users-->
<meta charset="UTF-8"> <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
<base target="">
<link rel="stylesheet" type="text/css" href="app.css">
<title>"Web programming - APP"</title>
</head>

<body>
<!-- This is a real visible part of the web page-->
<figure id="tlu_logo"><img border=none src="http://www.tlu.ee/~shikter/ristmed2/images/TLU_logo.jpg" alt="TLU" width="200"></figure>

<section id="Menu">
<h2><em>Form to send message:</em></h2>

<nav>
<ul STYLE="list-style-image: url(http://www.tlu.ee/~shikter/ristmed2/images/bullet/tlu_bullet.png)">
<form method="get">


<li> 	<label for="who">Recipient:* <label><br>
		<input type="text" name="who"><br>
<li> 	<label for="message">Message:* <label><br>
		<input type="text" name="message"><br>
<li> 	<label for="from_who">Your name:* <label><br>
		<input type="text" name="from_who"><br><br>
		
		<input type="submit" value="Send"><br>
</form>		
</ul>
</nav>
</section>
<br>

<section id="Terms">
<h2>Description:</h2>
<p> Course: "<strong>Web Programming</strong>".</p>
<p> Teacher: "<strong>Romil Robtsenkov</strong>".</p>
<p>This Topic about my learning "<strong><small>PHP</small></strong>" & "<strong><small>MySQL</small></strong>" and also "<strong><small>HTML</small></strong>" & "<strong><small>CSS</small></strong>". </p>
<p>You can see how I develop my skills.
You can find here my first messanger application. Which is on the head of page.
</p>
<center><img src="http://www.tlu.ee/~shikter/ristmed2/images/php-mysql-html-css.png" alt="HTML5 + CSS3" width="325";></center>
</section>


<br>
<hr />

<section id="address">
<br>

<address>Tallinn, Narva Rd 29</address>

<div class="bkt"><a href="http://localhost:5555/~shikter/homeworks/1.homework/" target="_self">1.Homework</a></div>

<br>

</section>


</body>
</html>