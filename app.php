<?php

//Check if there's a variable in the URL
if(isset($_GET["message"])) {
    
    //Only if there is message in the URL
    echo "there is message";
    
    // if it's empty
    if(empty($_GET["message"])){
        // it is empty
        echo " Please enter message ";
    } else {
        // it is not empty
        echo "Message:".$_GET["message"];
    
    } else {
        echo "there is no such message"; 
    }
    
//******************* 
//TO field validation
//*******************
    
if(isset($_GET["to"])){ // if there is ?to= in the URL
    if(empty($_GET["to"])){ //if it is empty
        echo "please enter the recipient! <br>"; //no it is not empty

//Getting the message from address
// if there is ?name=.. then $_GET["name"]
$mymessage = $_GET["message"];
$to = $_GET["to"];
  
echo "My message is ".$my_message." and is to ".$to; 

?>

<h2> First Application </h2>
<form method="get">
<label for="message">to:</label>
<input type="text" name="to"><br><br>
    
<label for="message">Message:</label>
<input type="text" name="message"><br><br>
    
<!-- This is the save button -->    
<input type="submit" value="Save to DB">

</form>
