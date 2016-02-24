<html>
<body>
    <h2> Forum Page </h2>
<form method="get">
    <label for ="name">Name*        </label>  <input type="text" name="name" /> <br>
    <label for ="password">Password*</label>  <input type="password" name="password" /><br>
<input type="submit" class="button" name="login" value="Log In" />
    
   
        <a class="btn" href="registerPage.php">Register</a>


     
</form>
    </body></html>    
<?php
$user_name = $_GET["name"];
$user_password = $_GET["password"];
		if(isset($_GET["name"])){
		
	if(empty($_GET["name"])){
		echo "Please enter your name"."<br>";
		}
		else {
			
		}
	}
	else{
		
	}
		if(isset($_GET["password"])){
		
	if(empty($_GET["password"])){
		echo "Please enter your password"."<br>";
		}
		else {
			
		}
	}
	else{
		
	}

?>