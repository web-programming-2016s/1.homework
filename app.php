<?php
//check if there is variable in the URL
if (isset($_GET["From"])) {

  //only if there is From in the URL
  //echo "there is From";

  //if its empty
  if(empty($_GET["From"])){
    //it is empty
    echo "Please enter your name! <br>";
  }else{
      //its not empty
    echo "From: ".$_GET["From"]."<br>";
  }

}else{
   //echo"there is no such thing as From";
 }
//*************************
//TO field validation
//*************************
 if (isset($_GET["To"])) { //if there is ?to= in the URL
   if(empty($_GET["To"])){ //if it is empty
     echo "Please enter the receipient! <br>"; //yes it is empty
   }else{
     echo "To: ".$_GET["To"]."<br>"; //no it is not empty
   }
 }

if (isset($_GET["message"])) {
  if(empty($_GET["message"])){
    echo "Please enter your message!";
  }else{
    echo "Message: ".$_GET["message"]."<br>";
  }

}else{
   //echo"there is no such thing as message";
 }


//getting the message from address
//if there is ?name= .. then $_GET["name"]
/*$my_message = $_GET["message"];
$To = $_GET["To"];
$from = $_GET["From"];*/



//echo "My message is ".$my_message." and is to ".$To."and from".$from;

 ?>

 <h2> First application  </h2>

<form method="get">

  <label for="From">From:* <label><br>
    <input type="text" name="From"><br>

   <label for="To">to:* <label>
     <input type="text" name="To"><br><br>

     <label for="message">Message:* <label><br>
       <input type="text" name="message"><br>

     <!-- This is the save button-->
     <input type= "submit" value= "Save to DB">

<form>

  My idea is to make a webapplication where you can easily search on map for places to go, events to visit. You can add your budget and
    travelling time, so it will calculate the fuel costs(if travelling by car) and show you the best offers.
    But since i have no skills and don't know how to do it I think i won't develop that idea. No other ideas still.
