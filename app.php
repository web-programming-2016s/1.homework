<?php
	//*************************************
	//check if there is variable in the URL
	//*************************************
	
	if(isset($_GET["product"])) {
		
		//only if there is product in the URL
		//echo "there is product ";
		
		//if it's empty
		if(empty($_GET["product"])){
			echo "Please, enter the product"."<br>"; //it is empty
		}else{
			echo "Product: ".$_GET["product"]."<br>"; //its not empty
		}
	}else{
		echo "There is no such thing as product";
		
	}
	if(isset($_GET["group"])) {
		
		//only if there is group in the URL
		//echo "there is group ";
		
		//if it's empty
		if(empty($_GET["group"])){
			echo "Please, enter the group of the prooduct!"."<br>";	//it is empty
		}else{
			echo "Group: ".$_GET["group"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as group";
		
	}
	if(isset($_GET["price"])){
		
		//only if there is price in the URL
		//echo "there is price ";
		
		//if it's empty
		if(empty($_GET["price"])){
			echo "Please, enter how much it costs!"."<br>"; //it is empty
		}else{
			echo "Price: ".$_GET["price"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as message";
		
	}
	
	//Getting the message from address
	// if there is ?name= .. then $_GET["name"]
	
	$group = $_GET["group"];
	$product = $_GET["product"];
	$price = $_GET["price"];

	
	
	
	echo $product." for ".$price." EUR was added to ".$group;

?>

<h2> Wish List </h2>

<form method="get">

	<label for="product">Product:<label><br>
	<input type="text" name="product"><br>
	
	<label for="group">Group:<label><br>
	<input type="text" name="group"><br>
	
	<label for="price">Price in EUR:<label><br>
	<input type="text" name="price"><br>
	
	
	<input type="submit" value="Add">
	
	
<form>	

<!--*************************************************************************************************************************************************************-->
<!--IDEA: Make an application, where is possible to make a wish list. Add product, edit or delete it-->
<!--*************************************************************************************************************************************************************-->
