 <h1 style="color:Purple;">My first application</h1>
 <h2 style="color:black;">Manage your money</h2>
<img src="euro.png" alt="money" style="width:304px;height:228px;">
<body style="background-color:lightgrey;">
  <html>
  <head>
  <style>
  h2 {
      color: rgb(159,107,63);
      font-family: Arial;
      font-size: 250%;

  }
  h3 {
      color: rgb(84,84,84);
      font-family: Arial;


  }
  p  {
      color: rgb(75,106,136);
      font-family: Arial;
      font-size:;
  }
  </style>
  </head>
  <body>

  </body>
  </html>


<?php

 ?>
  <br>

  </br>

  <form>

  <form method="get">

    <label for="message">Budget:* <label>
    <input type="text" name="a"<br><br>

  	<label for="message">Expense2:* <label>
  	<input type="text" name="b"<br><br>


  	<label for="to">Expense3:* <label>
  	<input type="text" name="c"<br><br>


    <label for="from">Expense4:* <label>
  	<input type="text" name="d"<br><br>



  	<!-- This is the save buttn-->
  	<input type="Submit" value="Save to DB">

  <form>
  	<p style="text-align:center;"><b> Something will be here </b></p>

  <?php
	require_once("../../../config.php");
  if(isset($_GET["to"])){
  	if(empty($_GET["to"])){
  		//it is empty
  		$everything_was_okay = false;
  		echo "Please enter the recipient!";

  		}else{
  			//its not empty
  		echo "to: ".$_GET["to"]."<br>";
  	}
  }


  if(isset($_GET["from"])){



  	if(empty($_GET["from"])){
  		//it is empty
  		$everything_was_okay = false;
  		echo "Please enter the recipient!";

  		}else{
  			//its not empty
  		echo "from: ".$_GET["from"]."<br>";
  	}
  }

  	//check if there is variable in the URL
  	if (isset ($_GET ["Budget"])) {
  		//only if there is message in the URL
  		//echo "there is message";
  		//if its empty
  		if (empty($_GET ["Budget"])){
  			//it is empty
  			echo "Enter the item <br>";
  		}else{
  			//its not empty
  			echo "#1 item: ".$_GET["Budget"]."<br>";
  		}

  	}else{
  		//echo "there is no such thing as message";
  	}

  		//check if there is variable in the URL
  		if (isset ($_GET ["Expense2"])) {
  			//only if there is message in the URL
  			//echo "there is message";
  			//if its empty
  			if (empty($_GET ["Expense2"])){
  				//it is empty
  				echo "Enter the item <br>";
  			}else{
  				//its not empty
  				echo "#2 item: ".$_GET["Expense2"]."<br>";
  			}

  		}else{
  			//echo "there is no such thing as message";

  		}

  	//check if there is variable in the URL
  	if (isset ($_GET ["Expense3"])) {

  		//only if there is message in the URL
  		//echo "there is message";

  		//if its empty
  		if (empty($_GET ["Expense3"])){

  			//it is empty
  			echo "Enter the item <br> ";

  		}else{

  			//its not empty

  			echo "#3 item: ".$_GET["Expense3"]."<br>";
  		}

  	}else{
  		//echo "there is no such thing as message";
  	}
  		//check if there is variable in the URL
  	if (isset ($_GET ["Expense4"])) {

  		//only if there is message in the URL
  		//echo "there is message";

  		//if its empty
  		if (empty($_GET ["Expense4"])){
  			//it is empty
  			echo "Enter the item <br>";
  		}else{
  			//its not empty
  			echo "#4 item : ".$_GET["Expense4"]."<br>";
  		}

  	}else{
  		//echo "there is no such thing as message";
  	}
    /***********************
    **** SAVE TO DB ********
    ***********************/

    // ? was everything okay
{

      echo "Saving to database ... ";


      //connection with username and password
      //access username from config
      //echo $db_username;

      // 1 servername
      // 2 username
      // 3 password
      // 4 database
      $mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_carmet");
      $stmt = $mysql->prepare("INSERT INTO homework (Budget, Expense2, Expense3, Expense4) VALUES (?,?,?,?)");

      //echo error
      echo $mysql->error;

      // we are replacing question marks with values
      // s - string, date or smth that is based on characters and numbers
      // i - integer, number
      // d - decimal, float

      //for each question mark its type with one letter
      $stmt->bind_param("ssss", $_GET["Budget"], $_GET["Expense2"],$_GET["Expense3"],$_GET["Expense4"]);

      //save
      if($stmt->execute()){
        echo "saved sucessfully";
      }else{
        echo $stmt->error;
      }

    }




  ?>
  <br> My idea is to make a webapplication where you can easily search on map for places to go, events to visit. You can add your budget and
    travelling time, so it will calculate the fuel costs(if travelling by car) and show you the best offers.
    But since i have no skills and don't know how to do it I think i won't develop that idea. No other ideas still.<br>

  <br>
  II Idea
    Budget managing and tracking your expenses. Creating lists for different fields ( entertainment, household, travelling, freetime, kids etc)
that help you keep your money management under controll, without collecting receips and bills. Will go with thi i think
