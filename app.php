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

  	<label for="name">Name:* <label>
  	<input type="text" name="name"><br>


    <label for="amount">Expense Amount:* <label>
  	<input type="text" name="amount"><br>



  	<!-- This is the save buttn-->
  	<input type="Submit" value="Save to DB">

  <form>
  	<p style="text-align:center;"><b> Take care </b></p>

  <?php
	require_once("../../../config.php");

  	//check if there is variable in the URL
  	if (isset ($_GET ["name"])) {

  		//only if there is message in the URL
  		//echo "there is message";

  		//if its empty
  		if (empty($_GET ["name"])){

  			//it is empty
  			echo "Enter the name <br> ";

  		}else{

  			//its not empty

  			echo "#3 item: ".$_GET["name"]."<br>";
  		}

  	}else{
  		//echo "there is no such thing as message";
  	}
  		//check if there is variable in the URL
  	if (isset ($_GET ["amount"])) {

  		//only if there is message in the URL
  		//echo "there is message";

  		//if its empty
  		if (empty($_GET ["amount"])){
  			//it is empty
  			echo "Enter the amount <br>";
  		}else{
  			//its not empty
  			echo "#4 item : ".$_GET["amount"]."<br>";
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
      $stmt = $mysql->prepare("INSERT INTO Homework2 (name, amount) VALUES (?,?)");

      //echo error
      echo $mysql->error;

      // we are replacing question marks with values
      // s - string, date or smth that is based on characters and numbers
      // i - integer, number
      // d - decimal, float

      //for each question mark its type with one letter
      $stmt->bind_param("sd", $_GET["name"], $_GET["amount"]);

      //save
      if($stmt->execute()){
        echo "saved sucessfully";
      }else{
        echo $stmt->error;
      }

    }
    ?>

  <a href="table.php">table</a>

  <br>
  II Idea
    Budget managing and tracking your expenses. Creating lists for different fields ( entertainment, household, travelling, freetime, kids etc)
that help you keep your money management under controll, without collecting receips and bills. Will go with thi i think.
Adding budget and expenses it will show you the money that is left
