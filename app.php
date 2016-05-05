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

    <label for="first name">first name:* <label>
    <input type="text"  name="firstname"><br>

  	<label for="last name">last name:* <label>
  	<input type="text"  name="lastname"><br>

    <label for="category">category* <label>
    <input type="text" name="category"><br>

    <label for="amount">Expense Amount:* <label>
  	<input type="text" name="amount"><br>



  	<!-- This is the save buttn-->
  	<input type="Submit" value="Save to DB">

  <form>
  	<p style="text-align:center;"><b> Take care </b></p>

  <?php
	require_once("../../../config.php");

$everything_was_okay = true;
  //check if there is variable in the URL
  if (isset ($_GET ["firstname"])) {
    if (empty($_GET ["firstname"])){
      $everything_was_okay = false; //empty
      echo "Enter your first name <br> ";
    }else{
      echo "first name".$_GET["firstname"]."<br>";
    }
  }else{
    $everything_was_okay = false; // do not exist
  }
  if (isset ($_GET ["lastname"])) {
    if (empty($_GET ["lastname"])){
      $everything_was_okay = false; //empty
      echo "Enter your last name <br> ";
    }else{
      echo "last name".$_GET["lastname"]."<br>";
    }
  }else{
    $everything_was_okay = false; // do not exist
  }

    if (isset ($_GET ["category"])) {
  		if (empty($_GET ["category"])){
  			//it is empty
  			echo "Enter the product <br>";
  		}else{
  			//its not empty
  			echo "category: ".$_GET["category"]."<br>";
  		}
  	}else{
  		//echo "there is no such thing as message";
  	}
  		//check if there is variable in the URL
  	if (isset ($_GET ["amount"])) {
  		if (empty($_GET ["amount"])){
  			//it is empty
  			echo "Enter the amount <br>";
  		}else{
  			//its not empty
  			echo "amount: ".$_GET["amount"]."<br>";
  		}
  	}else{
  		//echo "there is no such thing as message";
  	}
    /***********************
    **** SAVE TO DB ********
    ***********************/

    // ? was everything okay
