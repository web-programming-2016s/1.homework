

  <?php
$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$country = $geo["geoplugin_countryName"];
$city = $geo["geoplugin_city"];

?>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<center><div id="ticket">
		<form method="get">
	<label for="full-name"><label>
	<input type="text" name="full-name" placeholder="Enter your name"><br><br>
	<!--
	<label for="email">Your Email <label>
	<input type="text" name="email"><br><br>

	<label for="bday">Your Birthday <label>
		<input type="date" name="bday"><br><br>
	
	<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="1stclass") echo "checked";?>
value="1stclass">1st class
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="economyclass") echo "checked";?>
value="economyclass">Economy class <br><br> 

	
	<!-- This is the save button-->
	<input type="submit" value="Buy a Ticket">

<form>
	</div></center>
	
<div>
</body>

<?php 



  if(empty($_GET["full-name"])){
    echo "Please enter your full name";
} else {
   echo $_GET["full-name"]."<br>";
}

if(empty($_GET["email"])){
    echo "Please enter your email";
} else {
   echo $_GET["email"]."<br>";
}

?>









