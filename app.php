<?php

    // require another php file ../../.. means folders back 
    require_once("../../config.php");

     //if there is variable in the URL
     if(isset($_GET["message"])){
         
        //only if there is message in the URL
        echo "there is message ";
         
        //if its empty
        if(empty($_GET["message"])){
            //it is empty
            echo "plesae enter the message!";
        }else{
            //its is not empty
            echo "message: ".$_GET["message"]."<br>";
        }
         
     }else{
         echo "there is not such a thing as message";
     }


    //************
    //TO field valdidation
    //************

//if there is variable in the URL
     if(isset($_GET["to"])){//if there is ?to= in the URL
        if(empty($_GET["to"])){ //Yes it is empty
            echo "plesae enter the recipient! <br>";
        }else{
            echo "to: ".$_GET["to"]."<br>"; //no it is not empty         
        }
     }

    //************
    //From field valdidation
    //************
    if(isset($_GET["from"])){
         
        //only if there is from in the URL
        echo "there is from ";
         
        //if its empty
        if(empty($_GET["from"])){
            //it is empty
            echo "plesae enter from!";
        }else{
            //its is not empty
            echo "from: ".$_GET["from"]."<br>";
        }
        
    
     //connection with username and password
     //access username from config
     //echo $db_username;
     //1 servername
     //2 username
     //3 passward
     //4 database
     $mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_angcas");
        
    $stmt = $mysql->prepare("INSERT INTO messages_sample (recipient, message) VALUES (?,?)");
        
        //echo error
        echo $mysql->error;

        //We are replacing question marks wiht values
        //s - string, date or smth that is based on characters and 
        //i - integer, number
        //d - decimal, float
        
        //for each question mark its type with one letter
        $stmt->bind_param("ss", $_GET["to"], $_GET["message"]);
        
        //save 
        if ($stmt->execute()){
            echo "saved successfully";
        }else{
            echo $stmt->error;
        }
        
     }else{
         echo "there is not such a thing as message";
     }

      //getting the message from address
      //if there is ?name= .. then $_GET["name"]
      //$my_message = $_GET["message"];
      //$to = $_GET["to"];
      //$from = $_GET["from"];

      //echo "My message is ".$my_message." and is to ".$to;
    
?>
    

<form method="get">  
    <label for ="from"> from:* </label><br>
    <input type ="text" name="from"><br><br>
    
    <label for ="to"> to:* </label><br>
    <input type ="text" name="to"><br><br>
        
    <label for ="message"> message:* </label><br>
    <input type ="text" name="message"><br><br>
        
    <this is the save button-->
    <input type="submit" value="save to DB">

<form>    