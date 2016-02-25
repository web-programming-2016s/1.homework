
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

<h2 style="text-align:center;">Grocery list</h2>
<h3 style="text-align:center;"><i>For all you who hate carrying paper around</i></h3>

<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/28774-200.png">

<br>


</br>

<form>

<form method="get">

  <label for="message">#1:* <label>
  <input type="text" name="a"<br><br>

	<label for="message">#2:* <label>
	<input type="text" name="b"<br><br>


	<label for="to">#3:* <label>
	<input type="text" name="c"<br><br>


  <label for="from">#4:* <label>
	<input type="text" name="d"<br><br>



	<!-- This is the save buttn-->
	<input type="Submit" value="Save to DB">


<form>
	<p style="text-align:center;"><b> Add the items you need and they will appear
	as a list below </b></p>

<?php

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
	if (isset ($_GET ["a"])) {
		//only if there is message in the URL
		//echo "there is message";
		//if its empty
		if (empty($_GET ["a"])){
			//it is empty
			echo "Enter the item <br>";
		}else{
			//its not empty
			echo "#1 item: ".$_GET["a"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}

		//check if there is variable in the URL
		if (isset ($_GET ["b"])) {
			//only if there is message in the URL
			//echo "there is message";
			//if its empty
			if (empty($_GET ["b"])){
				//it is empty
				echo "Enter the item <br>";
			}else{
				//its not empty
				echo "#2 item: ".$_GET["b"]."<br>";
			}

		}else{
			//echo "there is no such thing as message";

		}

	//check if there is variable in the URL
	if (isset ($_GET ["c"])) {

		//only if there is message in the URL
		//echo "there is message";

		//if its empty
		if (empty($_GET ["c"])){

			//it is empty
			echo "Enter the item <br> ";

		}else{

			//its not empty

			echo "#3 item: ".$_GET["c"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}
		//check if there is variable in the URL
	if (isset ($_GET ["d"])) {

		//only if there is message in the URL
		//echo "there is message";

		//if its empty
		if (empty($_GET ["d"])){
			//it is empty
			echo "Enter the item <br>";
		}else{
			//its not empty
			echo "#4 item : ".$_GET["d"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}


  //********************************
//  **********Save to DB*************
  //*********************************

  //was everything oK?

	//Getting the message from the address
	// if there is ?name= .. then $_GET ["name"]
	//$my_message = $_GET["message"];
	//$to = $_GET ["to"];
	//$from = $_GET ["from"];

	//echo "My message is ".$my_message." and is to ".$to. " and is from " .$from;



?>
