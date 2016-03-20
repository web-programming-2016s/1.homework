<?php require_once("header.php"); ?>
<?php

	// require another php file
	// ../../../ => 3 folders back
	require_once("../../config.php");
	$everything_was_okay = true;


	//*********************
	// TO field validation
	//*********************
	if(isset($_GET["to"])){ //if there is ?to= in the URL
		if(empty($_GET["to"])){ //if it is empty
			$everything_was_okay = false; //empty
			echo "Please check at least one box! <br>"; // yes it is empty
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
        if(isset($_GET["from"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["from"])){
			//it is empty
			echo "Please enter your name!";
		}else{
			//its not empty
			echo "From: ".$_GET["from"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
    }
        
        if(isset($_GET["to"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["to"])){
			//it is empty
			echo "Please enter to whom the letter is address to!";
		}else{
			//its not empty
			echo "To: ".$_GET["to"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
    }

        if(isset($_GET["e-address"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["e-address"])){
			//it is empty
			echo "Please enter your e-address!";
		}else{
			//its not empty
			echo "E-address: ".$_GET["e-address"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
    }

        if(isset($_GET["phone_number"])){
		
		//only if there is message in the URL
		//echo "there is message";
		
		//if its empty
		if(empty($_GET["phone_number"])){
			//it is empty
			echo "Please enter your phone number!";
		}else{
			//its not empty
			echo "Phone number: ".$_GET["phone_number"]."<br>";
		}
		
	}else{
		//echo "there is no such thing as message";
    }

    $if_there_is_mob_cked = false;
if(isset($_GET["mobility1"])){
		
			//its not empty
			echo "Mobility 1: ".$_GET["mobility1"]."<br>";
            $if_there_is_mob_cked = true;
		
	    }

    else{
		//echo "there is no such thing as message";
    }

    $if_there_is_mob_cked = false;

    if(isset($_GET["mobility2"])){
		
			//its not empty
			echo "Mobility 2: ".$_GET["mobility2"]."<br>";
            $if_there_is_mob_cked = true;
		}
		
    else{
		//echo "there is no such thing as message";
    }

    $if_there_is_mob_cked = false;

    if(isset($_GET["mobility3"])){
		
			//its not empty
			echo "Mobility 3: ".$_GET["mobility3"]."<br>";
            $if_there_is_mob_cked = true;
		}
		
    else{
		//echo "there is no such thing as message";
    }

$if_there_is_mob_cked = false;

    if(isset($_GET["mobility4"])){
		
			//its not empty
			echo "Mobility 4: ".$_GET["mobility4"]."<br>";
            $if_there_is_mob_cked = true;
		}
		
    else{
		//echo "there is no such thing as message";
    }
    

    if($if_there_is_mob_cked == false){
    echo "Please check at least one box". "<br>";
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
		$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_angcas");
		
		$stmt = $mysql->prepare("INSERT INTO for_homework_table (recipient, message) VALUES (?,?)");
			
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
				<a href="homework%201%20idea%20created_b.php">
					App page
				</a>
			</li>
			
			
			<li>
				<a href="table_b.php">
					Table
				</a>
			</li>
			
		  </ul> 
		  
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<div class="container">


    <br>
    <h2> First application by Angel Casal </h2>

    <a href="table.php">Link to table</a>

    <form method="get">
        <div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
                        <label for="from">From:* </label>
                        <input type="text" name="from"
                        class="form-control">
                    </div>
				</div>
			</div>
        
        <div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
                        <label for="to">To:* </label>
                        <input type="text" name="to"
                            class="form-control">
                    </div>
				</div>
			</div>
        
        <div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
                    <label for="e-address">E-address:* </label>
                    <input type="text" name="e-address"
                                 class="form-control">
                    </div>
				</div>
			</div>

        <div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
                        <label for="phone_number">Phone number:* </label>
                        <input type="text" name="phone_number"
                        class="form-control">
                    </div>
				</div>
			</div>


      <input type="checkbox" name="mobility1" value="voluntary work"> I am interested in voluntary work<br>
      <input type="checkbox" name="mobility2" value="seminars"> I am interested in seminars<br>
      <input type="checkbox" name="mobility3" value="Youth exchange"> I am interested in youth exchange<br>
      <input type="checkbox" name="mobility4" value="trainings"> I am interested in trainings
    <br><br>

        <div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="form-group">
                      <label for="message">Message:* </label>
                      <input type="text" name="message"
                      class="form-control">
                    </div>
				</div>
			</div>


        <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <input class="btn btn-success hidden-xs" type="submit" value="Save data 1">
                        <input class="btn btn-success btn-block visible-xs-block" type="submit" value="Save data 2">
                    </div>
                </div>
            </form>

    </form>

</div>


