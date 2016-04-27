<?php require_once("header.php"); ?>
<?php

	// require another php file
	// ../../../ => 3 folders back
	require_once("../../../config.php");

	$everything_was_okay = true;

	//*********************
	// TO field validation
	//*********************
	if(isset($_GET["utility"])){ //if there is ?to= in the URL
		if(empty($_GET["utility"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please enter the utility! <br>"; // yes it is empty
		}else{
			echo "Utility: ".$_GET["utility"]."<br>"; //no it is not empty
		}
	}else{
		$everything_was_okay = false; // do not exist
	}

	//check if there is variable in the URL
	if(isset($_GET["amount"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["amount"])){
			//it is empty
			$everything_was_okay = false;
			echo "Please enter the amount! <br>";
		}else{
			//its not empty
			echo "Amount: ".$_GET["amount"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
		$everything_was_okay = false;
	}

		if(isset($_GET["deadline"])){ //if there is ?to= in the URL
		if(empty($_GET["deadline"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please enter the deadline! <br>"; // yes it is empty
		}else{
			echo "Deadline: ".$_GET["deadline"]."<br>"; //no it is not empty
		}
	}else{
		$everything_was_okay = false; // do not exist
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
		
		$stmt = $mysql->prepare("INSERT INTO homework (utility, amount, deadline, paid) VALUES (?,?,?,?)");
			
		//echo error
		echo $mysql->error;
		
		// we are replacing question marks with values
		// s - string, date or smth that is based on characters and numbers
		// i - integer, number
		// d - decimal, float
		
		//for each question mark its type with one letter
		$stmt->bind_param("ssss", $_GET["utility"], $_GET["amount"], $_GET["deadline"], $_GET["paid"] );
		
		//save
		if($stmt->execute()){
			echo "saved sucessfully";
		}else{
			echo $stmt->error;
		}
		
		
	}
	
	

?>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
		  <ul class="nav navbar-nav">
			
			<li class="active">
				<a href="application.php">
					App page
				</a>
			</li>
			
			
			<li>
				<a href="table.php">
					Table
				</a>
			</li>
			
		  </ul> 
		  
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">

		<h1> Insert the information of the payment </h1>

		<form>

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="form-group">
					<label for="Utility"> Utility: </label>
						<input name="utility" id="utility" type="text" class="form-control">


				</div>
			</div>
		
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="form-group">
					<label for="Amount"> Amount: </label>
						<input name="amount" id="amount" type="text" class="form-control">


				</div>
			</div>
		
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="form-group">
					<label for="Deadline"> Deadline: </label>
						<input name="deadline" id="deadline" type="text" class="form-control">


				</div>
			</div>
		
		</div>

		<div class="row">

				<div class="col-sm-3">
				<div class="form-group">
					<label for="Paid"> Paid: </label>
						<input name="paid" id="paid" type="text" class="form-control">


				</div>
			</div>	
		</div>
		
		<div class="row">
				<div class="col-md-3 col-sm-6">

		 <input class="btn btn-success hidden-xs" type="submit" value="Submit">
		 <input class="btn btn-success btn-block visible-xs-block" type="submit" value="Submit">	
		</div>	
	</div>



  
	</div>
  
  </body>
</html>
