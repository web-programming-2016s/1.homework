<?php

    // require another php file ../../.. means folders back 
    require_once("../../config.php");

     //if there is variable in the URL
     if(isset($_GET["possibilities"])){
         
        //only if there is message in the URL
        echo "there is message ";
         
        //if its empty
        if(empty($_GET["possibilities"])){
            //it is empty
            echo "plesae enter the message!";
        }else{
            //its is not empty
            echo "possibilities: ".$_GET["possibilities"]."<br>";
        }
         
     }else{
         echo "there is not such a thing as message";
     }


    //************
    //TO field valdidation
    //************

//if there is variable in the URL
     if(isset($_GET["email"])){//if there is ?email= in the URL
        if(empty($_GET["email"])){ //Yes it is empty
            echo "plesae enter the recipient! <br>";
        }else{
            echo "email: ".$_GET["email"]."<br>"; //no it is not empty         
        }
     }

    //************
    //From field valdidation
    //************
    if(isset($_GET["name"])){
         
        //only if there is from in the URL
        echo "there is from ";
         
        //if its empty
        if(empty($_GET["name"])){
            //it is empty
            echo "plesae enter name!";
        }else{
            //its is not empty
            echo "from: ".$_GET["name"]."<br>";
        }
        
    
     //connection with username and password
     //access username from config
     //echo $db_username;
     //1 servername
     //2 username
     //3 passward
     //4 database
     $mysql = new mysqli("localhost", $db_username, $db_passward, "webpr2016_angcas");
        
    $stmt = $mysql->prepare("INSERT INTO messages_sample (recipient, message) VALUES (?,?)");
        
        //echo error
        echo $mysql->error;

        //We are replacing question marks wiht values
        //s - string, date or smth that is based on characters and 
        //i - integer, number
        //d - decimal, float
        
        //for each question mark its type with one letter
        $stmt->bind_param("ss", $_GET["email"], $_GET["possibilities"]);
        
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
    <label for ="name"> from:* </label><br>
    <input type ="text" name="from"><br><br>
    
    <label for ="email"> to:* </label><br>
    <input type ="text" name="email"><br><br>
        
    <label for ="possibilities"> message:* </label><br>
    <input type ="text" name="possibilities"><br><br>
        
    <this is the save button-->
    <input type="submit" value="save to DB">

<form>