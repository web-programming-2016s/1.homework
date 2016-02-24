
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
<h3 style="text-align:center;"><i>For all you scatterbrained idiots!</i></h3>

<img src="https://d30y9cdsu7xlg0.cloudfront.net/png/28774-200.png">

<br>


</br>

<form>

<form method="get">

  <label for="message">#1:* <label>
  <input type="text" name="message"<br><br>

	<label for="message">#2:* <label>
	<input type="text" name="message"<br><br>


	<label for="to">#3:* <label>
	<input type="text" name="to"<br><br>


  <label for="from">#4:* <label>
	<input type="text" name="from"<br><br>



	<!-- This is the save buttn-->
	<input type="Submit" value="Save to DB">


<form>
	<p style="text-align:center;"><b> Add the items you need and they will appear
	as a list below </b></p>

<?php

	//check if there is variable in the URL
	if (isset ($_GET ["message"])) {
		//only if there is message in the URL
		//echo "there is message";
		//if its empty
		if (empty($_GET ["message"])){
			//it is empty
			echo "Enter the item <br>";
		}else{
			//its not empty
			echo "#1: ".$_GET["message"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}

		//check if there is variable in the URL
		if (isset ($_GET ["message"])) {
			//only if there is message in the URL
			//echo "there is message";
			//if its empty
			if (empty($_GET ["message"])){
				//it is empty
				echo "Enter the item <br>";
			}else{
				//its not empty
				echo "#2: ".$_GET["message"]."<br>";
			}

		}else{
			//echo "there is no such thing as message";

		}

	//check if there is variable in the URL
	if (isset ($_GET ["to"])) {

		//only if there is message in the URL
		//echo "there is message";

		//if its empty
		if (empty($_GET ["to"])){

			//it is empty
			echo "Enter the item <br> ";

		}else{

			//its not empty

			echo "#3: ".$_GET["to"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}
		//check if there is variable in the URL
	if (isset ($_GET ["from"])) {

		//only if there is message in the URL
		//echo "there is message";

		//if its empty
		if (empty($_GET ["from"])){
			//it is empty
			echo "Enter the item <br>";
		}else{
			//its not empty
			echo "#: ".$_GET["from"]."<br>";
		}

	}else{
		//echo "there is no such thing as message";
	}

	//Getting the message from the address
	// if there is ?name= .. then $_GET ["name"]
	//$my_message = $_GET["message"];
	//$to = $_GET ["to"];
	//$from = $_GET ["from"];

	//echo "My message is ".$my_message." and is to ".$to. " and is from " .$from;



?>
